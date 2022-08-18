<?php

namespace MikkelRicky\Retstavning;

final class AarhusianskRetstavning extends Retstavning {
    private array $replacements;

    public function fixTypos(string $text): string
    {
        $replacements = $this->getReplacements();

        // Mark all textual numbers.
        $text = str_ireplace(
            array_keys($replacements),
            array_map(fn (string $s) => '<(['.$s.'])>', array_keys($replacements)),
            $text
        );

        // Unmark all markers immediately after a marker.
        $text = preg_replace('/\<\(\[([^\]]+)\]\)\>\<\(\[([^\]]+)\]\)\>/', '<([\1])>\2', $text);

        // Replace markers.
        $text = str_ireplace(
            array_map(fn (string $s) => '<(['.$s.'])>', array_keys($replacements)),
            array_values($replacements),
            $text
        );

        return $text;
    }

    // https://rokokoposten.dk/2016/12/17/aarhus-indfoerer-nyt-alfab1/
    private function getReplacements(): array
    {
        if (empty($this->replacements)) {
            $names = [
                1 => 'en',
                2 => 'to',
                3=> 'tre',
                4=> 'fire',
                5=> 'fem',
                6=> 'seks',
                7=> 'syv',
                8=> 'otte',
                9=> 'ni',
                10 => 'ti',
                11 => 'elleve',
                12 => 'tolv',
                13 => 'tretten',
                14=> 'fjorten',
                15=> 'femten',
                16=> 'seksten',
                17=>'sytten',
                18=>'atten',
                19=>'nitten',
                20=>'tyve',
                30=>'tredive',
                40=>'fyrre',
                50=>'helvtreds',
                60=>'tres',
                70=>'halvfjerds',
                80=>'firs',
                90=>'halvfems',
            ];

            $this->replacements = [
                'et' => '1',
                'trætten' => '13',
                'halv' => '½',
            ];

            for ($i = 1; $i < 1000; $i++) {
                if (isset($names[$i])) {
                    $this->replacements[$names[$i]] = (string)$i;
                } else if (20 < $i && $i < 100) {
                    $ones = $i%10;
                    $tens = 10*intdiv($i, 10);
                    if (isset($names[$ones], $names[$tens])) {
                        $this->replacements[$names[$ones].'og'.$names[$tens]] = (string)$i;
                    }
                }
            }

            // Sort replacements ascending by length.
            uksort($this->replacements, fn($k0, $k1) => -(strlen($k0) <=> strlen($k1)));
        }

        return $this->replacements;
    }
}

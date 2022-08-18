<?php

namespace MikkelRicky\Retstavning;

use PHPUnit\Framework\TestCase;

final class AarhusianskRetstavningTest extends TestCase {
    /**
     * @dataProvider provideFixTyposData
     */
    public function testFixTypos(string $text, string $expected)
    {
        $retstavning = new AarhusianskRetstavning();
        $actual = $retstavning->fixTypos($text);

        $this->assertSame($expected, $actual);
    }

    public function provideFixTyposData(): iterable
    {
        yield [
            'nitini',
            '9ti9',
        ];

        yield [
            'Dokken',
            'Dokk1',
        ];

        yield [
            'Slet',
            'Sl1',
        ];

        yield [
            'initiativ',
            'i9tia10v',
        ];

        yield [
            'tid',
            '10d',
        ];

        yield [
            'Tid',
            '10d',
        ];


        yield [
            'God weekend',
            'God week1d',
        ];

        // https://hojskolesangbogen.dk/om-sangbogen/historier-om-sangene/h-i/hoejt-fra-traeets-groenne-top
        yield [
            '
1. Højt fra træets grønne top
stråler juleglansen;
spillemand, spil lystigt op,
nu begynder dansen.
Læg nu smukt din hånd i min,
ikke rør ved den rosin!
Først skal træet vises,
siden skal det spises.

2.Se, børnlil’, nu går det godt,
I forstår at trave,
lad den lille Sine blot
få sin julegave.
Løs kun selv det røde bånd!
Hvor du ryster på din hånd!
Når du strammer garnet,
kvæler du jo barnet.

3. Peter har den gren så kær,
hvorpå trommen hænger;
hver gang han den kommer nær,
vil han ikke længer.
Hvad du ønsker, skal du få,
når jeg blot tør stole på,
at du ej vil tromme,
før min sang er omme.

4. Anna hun har ingen ro,
før hun får sin pakke,
fire alen merino
til en vinterfrakke.
Barn, du bli’r mig altfor dyr,
men da du så propert syr,
sparer vi det atter,
ikke sandt, min datter?

5. Denne fane ny og god
giver jeg til Henrik;
du er stærk, og du har mod,
du skal være fændrik:
Hvor han svinger fanen kækt!
Børn! I skylder ham respekt;
vid, det er en ære
Dannebrog at bære.

6. Børn, nu er jeg bleven træt,
og I får ej mere,
moder er i køkkenet,
nu skal hun traktere.
Derfor får hun denne pung,
løft engang, hvor den er tung!
Julen varer længe,
koster mange penge.
',
            '
1. Højt fra træ1s grønne 2p
stråler juleglans1;
spillemand, spil lys10gt op,
nu begynder dans1.
Læg nu smukt din hånd i min,
ikke rør ved d1 rosin!
Først skal træ1 vises,
sid1 skal d1 spises.

2.Se, børnlil’, nu går d1 godt,
I forstår at trave,
lad d1 lille Sine blot
få sin julegave.
Løs kun selv d1 røde bånd!
Hvor du ryster på din hånd!
Når du strammer garn1,
kvæler du jo barn1.

3. P1er har d1 gr1 så kær,
hvorpå tromm1 hænger;
hver gang han d1 kommer nær,
vil han ikke længer.
Hvad du ønsker, skal du få,
når jeg blot tør s2le på,
at du ej vil tromme,
før min sang er omme.

4. Anna hun har ing1 ro,
før hun får sin pakke,
4 al1 merino
10l 1 vinterfrakke.
Barn, du bli’r mig altfor dyr,
m1 da du så propert syr,
sparer vi d1 atter,
ikke sandt, min datter?

5. D1ne fane ny og god
giver jeg 10l H1rik;
du er stærk, og du har mod,
du skal være fændrik:
Hvor han svinger fan1 kækt!
Børn! I skylder ham respekt;
vid, d1 er 1 ære
Dannebrog at bære.

6. Børn, nu er jeg blev1 træt,
og I får ej mere,
moder er i køkk1et,
nu skal hun traktere.
Derfor får hun d1ne pung,
løft 1gang, hvor d1 er tung!
Jul1 varer længe,
koster mange p1ge.
',
        ];

        return;

        // https://rokokoposten.dk/2016/12/17/aarhus-indfoerer-nyt-alfab1/
        yield [
            '
Aarhus indfører u9kt nyt alfab1

I Aarhus har man både bibliotek1 Dokk1 og idrætshallerne Globus1 og LYS1. Nu indfører smil1s by sit helt eg1 u9kke alfab1, der skal skabe krea10v semio10sk 7nergi mellem tal og bogstaver i byrum1.

“D1 bliver så f1,” udtaler 2bias 9kolajs1, der er krea10v projektleder og 1234567890-sperson for indførels1 af 1 helt nyt alfab1 i hele Aarhus Kommune.

D1 udtaler han fredag aft1 til RokokoPost1s uds1dte over 1 Ceres 2p. D1 sker i paus1 under 1 særopførelse af 11rhøj opført på regnemaskiner på Aarhus Teater i anled9ng af kommun1s nye kommunikationstrategi.

Bliver k1dt for and1 1d “3ls” og “0er”
Strategi1 består af 1 helt nyt alfab1, som ifølge 2bias og omtr1t syvhundredefemtien Kaospiloter vil skabe 1 “u9k krea10v semio10sk 7nergi i d1 posturbane rum”. Ikke nok med d1: Aarhusianerne vil fremover blive k1dt vidt og bredt for deres nye og 1estå1de måde at kommu9kere på.

“D1te vil virkelig sætte by1 på landkort1, for fremover vil 1hver lynhurtigt kunne se, at 1 person er fra Aarhus. Ikke kun fordi de siger “0er” eller “3ls”, m1 fordi de kommu9kerer helt u9kt og inddrager 2talt nye dim1sioner i sprog1,” jubler 2bias 9kolajs1.

“Vi har forståelse 4, at implem1teringsfas1 godt kan blive l1 3ls, m1 vi er sikre på, at d1 vil skabe 1 helt u9k krea10v 7nergi på d1 lange bane,” siger han.

Ældre gamere jubler: D1 er 1337
1 m1ingsmåling blandt by1s borgere viser dog, at der er udbredt skepsis over for d1 nye i9tiativ, og at 1 del ligefrem finder d1 13de og m1ingsløst.

“Nogle er ude med riv1 på grund af d1 her, m1 helt ærligt. De har jo sl1 ikke prøv1 at implem1tere tal i deres kommu9kation 1dnu. Jeg er overbevist om, at alle nok skal blive lige så begejs3de for d1 nye alfab1, som de blev for Da9sh 4 progress,” siger 2bias og tilføjer:

“Godt begyndt er altså ½t fuld1dt, nå! Og d1 her bliver ∞ f1!”

2bias 9kolajs1 fortæller også, at d1 langt fra er alle, som er utilfredse med d1 nye alfab1.

“D1 er helt vildt populært blandt 1 del midaldr1de computerspillere, og hvis folk1e, der forudså, at World of Warcraft blev stort, kan lide d1, kan d1 ikke gå galt,” siger han og tilføjer:

“De kalder faktisk d1 nye måde at kommu9kere på for ‘totalt 1337’.”
',
            '
Aarhus indfører u9kt nyt alfab1

I Aarhus har man både bibliotek1 Dokk1 og idrætshallerne Globus1 og LYS1. Nu indfører smil1s by sit helt eg1 u9kke alfab1, der skal skabe krea10v semio10sk 7nergi mellem tal og bogstaver i byrum1.

“D1 bliver så f1,” udtaler 2bias 9kolajs1, der er krea10v projektleder og 1234567890-sperson for indførels1 af 1 helt nyt alfab1 i hele Aarhus Kommune.

D1 udtaler han fredag aft1 til RokokoPost1s uds1dte over 1 Ceres 2p. D1 sker i paus1 under 1 særopførelse af 11rhøj opført på regnemaskiner på Aarhus Teater i anled9ng af kommun1s nye kommunikationstrategi.

Bliver k1dt for and1 1d “3ls” og “0er”
Strategi1 består af 1 helt nyt alfab1, som ifølge 2bias og omtr1t syvhundredefemtien Kaospiloter vil skabe 1 “u9k krea10v semio10sk 7nergi i d1 posturbane rum”. Ikke nok med d1: Aarhusianerne vil fremover blive k1dt vidt og bredt for deres nye og 1estå1de måde at kommu9kere på.

“D1te vil virkelig sætte by1 på landkort1, for fremover vil 1hver lynhurtigt kunne se, at 1 person er fra Aarhus. Ikke kun fordi de siger “0er” eller “3ls”, m1 fordi de kommu9kerer helt u9kt og inddrager 2talt nye dim1sioner i sprog1,” jubler 2bias 9kolajs1.

“Vi har forståelse 4, at implem1teringsfas1 godt kan blive l1 3ls, m1 vi er sikre på, at d1 vil skabe 1 helt u9k krea10v 7nergi på d1 lange bane,” siger han.

Ældre gamere jubler: D1 er 1337
1 m1ingsmåling blandt by1s borgere viser dog, at der er udbredt skepsis over for d1 nye i9tiativ, og at 1 del ligefrem finder d1 13de og m1ingsløst.

“Nogle er ude med riv1 på grund af d1 her, m1 helt ærligt. De har jo sl1 ikke prøv1 at implem1tere tal i deres kommu9kation 1dnu. Jeg er overbevist om, at alle nok skal blive lige så begejs3de for d1 nye alfab1, som de blev for Da9sh 4 progress,” siger 2bias og tilføjer:

“Godt begyndt er altså ½t fuld1dt, nå! Og d1 her bliver ∞ f1!”

2bias 9kolajs1 fortæller også, at d1 langt fra er alle, som er utilfredse med d1 nye alfab1.

“D1 er helt vildt populært blandt 1 del midaldr1de computerspillere, og hvis folk1e, der forudså, at World of Warcraft blev stort, kan lide d1, kan d1 ikke gå galt,” siger han og tilføjer:

“De kalder faktisk d1 nye måde at kommu9kere på for ‘totalt 1337’.”
',
            ];
    }
}

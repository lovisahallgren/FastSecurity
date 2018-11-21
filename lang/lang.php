<?php
$languages = [
  'eng' =>
    ['header' =>
              ['firstHeader' => 'Fast Security',
               'weraHeader' => 'Accessories from Wera Wang',
               'featuresHeader' => 'Feeling special with personalized features',
               'timeHeader' => 'Technological milestones',
               'featureColor' => 'Choose your own colour.',
               'folder' => 'Productfolder',
               'registerHeader' => 'create your unique adventures.',
               'downHeader' => 'Continue learning more!',
               'downDesk'=> 'Thank you for registrating.'],
    'navbar' =>
              ['home' => 'Home',
               'exterior' => 'Exterior',
               'interior' => 'Interior',
               'performance' => 'Performance',
               'accessories' => 'Accessories'],
  'content' =>
              ['firstPage' => 'On the go for a future experience',
               'exterior' => 'The FastSecurity motorcycle gets you 132 miles worth of adventure on a single charge. It’s carbon composite body is both lightweight and aerodynamic, in tandem with it’s high-end suspension system - FastSecurity is speed and comfort combined in excellence.',
               'interior' => 'The high-end technology inside of the FastSecurity puts you In front of a robust titanium steering system and on smooth alcantara seating. The integrated AR-glasses lets you experience the world in a new way - all connected to your FastSecurity motorcycle.',
               'register' => 'To recieve more info about FastSecurity and local event invites, enter your info below',
               'brochure' => 'Download our brouchure below to learn more about Fast Security',
               '1937' => 'SAAB started in Trollhättan, Sweden',
               '1946' => 'The first SAAB car is born. The SAAB 92',
               '1978' => 'The SAAB 900 marks a new form factor and power.',
               '1997' => 'The SAAB 9-5 is unveiled. A car for a new era.',
               '2010' => 'Second generation SAAB 9-5 is made a reality.',
               '2020' => 'SAAB enters the future with the FastSecurity'],
  'button' =>
              ['btn' => 'Start your journey',
               'reserve' => 'Reserve My Fast Security',
              'btnFollow' => 'Follow fast security',
              'btnBack' => 'Take me back',
              'btnDown' => 'Download your brouchure here']
    ],
  'swe' =>
    ['header' =>
              ['firstHeader' => 'Fast Security',
               'weraHeader' => 'Tillbehör från Wera Wang.',
               'featuresHeader' => 'Känner speciellt med personliga funktioner.',
               'timeHeader' => 'Teknologiska milstolpar.',
               'featureColor' => 'Känner speciellt med personliga funktioner',
               'folder' => 'Produktmapp',
               'registerHeader' => 'skapa dina unika äventyr.',
               'downHeader' => 'Fortsätt lära dig mer!',
               'downDesk'=> 'Tack för registreringen.'],
    'navbar' =>
              ['home' => 'Hem',
               'exterior' => 'Exteriör',
               'interior' => 'Interiör',
               'performance' => 'Prestanda',
               'accessories' => 'Tillbehör'],
  'content' =>
              ['firstPage' => 'På resan för en framtida upplevelse',
               'exterior' => 'FastSecurity motorcykel får dig 132 miles äventyr av ett äventyr på en enda avgift. Det är kolkompositkroppen både lätt och aerodynamiskt, i kombination med det avancerade upphängningssystemet. FastSecurity kombinerar snabbhet och komfort i toppkvalitet.',
               'interior' => 'Den avancerade tekniken inuti FastSecurity sätter dig framför ett robust titansystem och slät alcantara sittplatser. De integrerade AR-glasögonen låter dig uppleva världen på ett nytt sätt - alla anslutna till din FastSecurity-motorcykel.',
               'register' => 'För att få mer information om FastSecurity och lokala evenemangsinbjudningar, skriv in din information nedan',
               'brochure' => 'Ladda ner vår brouchure nedan för att lära dig mer om Fast Security',
               '1937' => 'SAAB startade i Trollhättan, Sverige',
               '1946' => 'Den första SAAB bilen är född. SAAB 92',
               '1978' => 'SAAB 900 markerar en ny formfaktor och effekt.',
               '1997' => 'SAAB 9-5 presenteras. En bil för en ny era.',
               '2010' => 'Andra generationens SAAB 9-5 är en realitet.',
               '2020' => 'SAAB går in i framtiden med FastSecurity'],
  'button' =>
              ['btn' => 'Börja din resa',
               'reserve' => 'Boka min Fast Security',
              'btnFollow' => 'Följ fast security',
              'btnBack' => 'Ta mig tillbaka',
              'btnDown' => 'Ladda ner din brouchure här']
    ],
  ];







if(isset($_GET['user_lang'])){
   $lang = trim(filter_var($_GET['user_lang'], FILTER_SANITIZE_STRING));
 } else {
   $lang = 'eng';
 };

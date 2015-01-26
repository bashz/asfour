<?php

namespace Asfour\ActionBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Asfour\ActionBundle\Entity\Action;

class LoadActionData extends AbstractFixture implements OrderedFixtureInterface {

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager) {
        $actionMax = new Action();
        $actionMin = new Action();
        
        $actionMax->setTitle('Free launch');
        $actionMax->setLocale('fr_FR');
        $actionMax->setPreambule('Petit Lorem ipsum ici tout à fait comme deux paragraphes »'
                . 'Avec l\'injection de code html telle rupture de ligne. </ P> <p> Nous pouvons également'
                . '«trouver des liens et une introduction à l\'action en cours pour mettre le '
                . '«lecteurs dans le contexte de l\'action, ici je termine avec '
                . 'Un paragraphe balise de fermeture. </ P>');
        $actionMax->setDate(new \DateTime());
        $actionMax->setBody('<h2> Cool Stroy</ h2> <p> Petit lorem ipsum ici tout à fait comme '
                . 'deux paragraphes avec injection de code html telle rupture de ligne. </ p> <p> '
                . 'Nous pouvons également trouver des liens et une introduction à l\'action en cours'
                . ' pour mettre les lecteurs dans le contexte de l\'action, ici je termine par un '
                . 'paragraphe balise de fermeture. </ p> <p> un plus Lorem ipsum peut aller ici, '
                . 'mais depuis que je ne ai pas accss au filet en ce moment je vais rédiger mon propre'
                . ' lorem ipsum, en utilisant ne importe quel texte anglais que je peux trouver sur mon'
                . ' écran alors ne soyez pas surpris, mieux ne même pas essayer de lire cela, on entend '
                . 'juste pour remplir l\'espace vide pour extraits de test. </ p> <p> <ul class = "simple">
                     <li> <tt class = "docutils littérale"> <span class = "de pré"> AUTO </ span> </ tt>
                     (par défaut): Indique Doctrine de choisir la stratégie qui est
                     préféré par la plate-forme de base de données utilisée. Les stratégies privilégiées
                     sont l\'identité pour MySQL, SQLite, MSSQL et SQL Anywhere et SEQUENCE
                     pour Oracle et PostgreSQL. Cette stratégie fournit une portabilité totale. </ Li>
                     <li> <tt class = "docutils littérale"> <span class = "de pré"> SEQUENCE </ span> </ tt>:
                     Indique Doctrine d\'utiliser une séquence d\'ID de base de données
                     génération. Cette stratégie ne fournit actuellement pas pleine
                     portabilité. Les séquences sont pris en charge par Oracle, PostgreSQL et
                     SQL Anywhere. </ Li>
                     <li> <tt class = "docutils littérale"> <span class = "de pré"> IDENTITÉ </ span> </ tt>:
                     Indique Doctrine à utiliser des colonnes d\'identité spéciales
                     la base de données qui génèrent une valeur lors de l\'insertion d\'une ligne. cette
                     stratégie ne fournit actuellement pas complète portabilité et est
                     soutenu par les plates-formes suivantes: MySQL / SQLite / manuel SQL Anywhere
                     (AUTO_INCREMENT), MSSQL (identité) et PostgreSQL (SERIAL). </ Li>
                     <li> <tt class = "docutils littérale"> <span class = "de pré"> TABLE </ span> </ tt>:
                     Indique Doctrine à utiliser un tableau distinct pour ID
                     génération. Cette stratégie fournit une portabilité totale.
                     <strong> * Cette stratégie ne est pas encore implémenté! * </ strong> </ li>
                     <li> <tt class = "docutils littérale"> <span class = "de pré"> NONE </ span> </ tt>:
                     Indique Doctrine que les identifiants sont affectés (et
                     ainsi généré) par votre code. La cession doit avoir lieu avant
                     une nouvelle entité est passée à <tt class = "docutils littérales"> <span class = "de pré">
                     EntityManager # persistent </ span> </ tt>. NONE est le
                     même comme laissant au large de laGeneratedValue entièrement. </ li>
                     </ ul> </ p> <p> Certains médias peuvent être ajoutés </ p> <div class = "col-md-7">
                     <div class = "marque-image cachée sm-cachés-xs">
                     <img alt = "logo de la marque" 
                     src = "https://git.accessnow.org/assets/brand_logo-c37eb221b456bb4b472cc1084480991f.png">
                     </ div>
                     <div class = "xs-brand_text cachés">
                     <h2> Les logiciels open source de collaborer sur le code </ h2>
                     <p class = "entraîner">
                     Gérer dépôts git des contrôles d\'accès à grains fins qui gardent votre code sécurisé.
                     Effectuer des examens de code et de renforcer la collaboration avec les demandes de fusion.
                     Chaque projet peut également avoir un tracker question et un wiki.
                     </ p>
                     </ div>
                     </ div>');
        $actionMax->setFacts('This is meant to be an entity, I mock it for now.');
        $actionMax->setIsActive(true);
        $actionMax->setPlace('Ariana');
        
        $actionMax->addBlessed($this->getReference('ali-one'));
        $actionMax->addBlessed($this->getReference('ali-two'));
        
        $actionMin->setTitle('Doctor Visit');
        $actionMin->setDate(new \DateTime());
        $actionMin->setBody('<h2>Cool Stroy 2</h2>'
                . '<p>A longer Lorem ipsum can go here but since I don\'t have accss'
                . ' to the net right now I will craft my own lorem ipsum, using whatever'
                . ' english text I can find on my screen so don\'t be surprised, '
                . 'better do not even try to read this it is meant just to fill'
                . ' blank space for test previews.</p>'
                . '<p></p>'
                . '<p>Some Media can be added</p>');
        
        $actionMin->setPlace('Tunis');
        
        $actionMin->addBlessed($this->getReference('ali-one'));
        
        $image1 = new \Asfour\ActionBundle\Entity\Image();
        $image1->setName('Ali-one');
        $image1->setPath('action');
        $image1->setMimeType('image/png');
        $image1->setSize('180x180');
        
        $image1->setAction($actionMax);
        $actionMax->addImage($image1);
        
        $manager->persist($actionMax);
        $manager->persist($actionMin);
        
        $manager->flush();
        
        $actionMax->setPreambule('<p>Small lorem ipsum here quite like two paragraphs'
                . ' with html code injection such line break.</p><p>We can also '
                . 'find links and an introduction to the current action to put the '
                . 'readers into the context of the action, here I am finishing with'
                . ' a close paragraph tag.</p>');
        $actionMax->setBody('<h2>Cool Stroy</h2>'
                . '<p>Small lorem ipsum here quite like two paragraphs'
                . ' with html code injection such line break.</p><p>We can also '
                . 'find links and an introduction to the current action to put the '
                . 'readers into the context of the action, here I am finishing with'
                . ' a close paragraph tag.</p>'
                . '<p>A longer Lorem ipsum can go here but since I don\'t have accss'
                . ' to the net right now I will craft my own lorem ipsum, using whatever'
                . ' english text I can find on my screen so don\'t be surprised, '
                . 'better do not even try to read this it is meant just to fill'
                . ' blank space for test previews.</p>'
                . '<p><ul class="simple">
                    <li><tt class="docutils literal"><span class="pre">AUTO</span></tt> (default): Tells Doctrine to pick the strategy that is
                    preferred by the used database platform. The preferred strategies
                    are IDENTITY for MySQL, SQLite, MsSQL and SQL Anywhere and SEQUENCE
                    for Oracle and PostgreSQL. This strategy provides full portability.</li>
                    <li><tt class="docutils literal"><span class="pre">SEQUENCE</span></tt>: Tells Doctrine to use a database sequence for ID
                    generation. This strategy does currently not provide full
                    portability. Sequences are supported by Oracle, PostgreSql and
                    SQL Anywhere.</li>
                    <li><tt class="docutils literal"><span class="pre">IDENTITY</span></tt>: Tells Doctrine to use special identity columns in
                    the database that generate a value on insertion of a row. This
                    strategy does currently not provide full portability and is
                    supported by the following platforms: MySQL/SQLite/SQL Anywhere
                    (AUTO_INCREMENT), MSSQL (IDENTITY) and PostgreSQL (SERIAL).</li>
                    <li><tt class="docutils literal"><span class="pre">TABLE</span></tt>: Tells Doctrine to use a separate table for ID
                    generation. This strategy provides full portability.
                    <strong>*This strategy is not yet implemented!*</strong></li>
                    <li><tt class="docutils literal"><span class="pre">NONE</span></tt>: Tells Doctrine that the identifiers are assigned (and
                    thus generated) by your code. The assignment must take place before
                    a new entity is passed to <tt class="docutils literal"><span class="pre">EntityManager#persist</span></tt>. NONE is the
                    same as leaving off the @GeneratedValue entirely.</li>
                    </ul></p>'
                . '<p>Some Media can be added</p>'
                . '<div class="col-md-7">
                    <div class="brand-image hidden-sm hidden-xs">
                    <img alt="Brand logo" src="https://git.accessnow.org/assets/brand_logo-c37eb221b456bb4b472cc1084480991f.png">
                    </div>
                    <div class="brand_text hidden-xs">
                    <h2>Open source software to collaborate on code</h2>
                    <p class="lead">
                    Manage git repositories with fine grained access controls that keep your code secure.
                    Perform code reviews and enhance collaboration with merge requests.
                    Each project can also have an issue tracker and a wiki.
                    </p>
                    </div>
                    </div>');
        $actionMax->setLocale('en_Us');
        
        $manager->persist($actionMax);
        
        $manager->flush();
        
        $actionMax->setPreambule('لله يرحمك يا عم العيساوي
من ملاكم إلى هدف للمافيا إلى مربّي و صديق للحمام –
قصة أشهر صديق للحمام بالعاصمة التونسية ( جامع الفتح ) ----- من ملاكم عالمي و ملياردير إلى معوق متسول');
        $actionMax->setBody('لقائي به كان صدفة... سألته عن سر تعلقه بالحمام وسر تعلق الحمام به فوجدت نفسي مشدود لسماع قصته لصدق لهجة صاحبها...إنه ذاك الرجل المسن الذي يقبع على كرسي متحرك خلف جامع الفتح يعرفه القاصي والداني من سكان العاصمة ..
الحمام منتشر هنا وهناك بالقرب منه يناديه بأسماء أجنبية فيطير ليحط على يديه ويقتات من كفيه الحب والأرز الذي يجود به عليه أهل الخير..هذا الرجل تشعر للوهلة الأولى وحين يقع عليه ناظرك أنه ذو كبرياء عال وأنفة كبيرة...الناس لا يعرفون الحقيقة التي تعيش معه منذ ما يزيد عن 11 سنة .. و لا يعرفون أن خلف تلك المأساة تقف أياد خفية حولته من ملاكم رفع راية تونس في عديد المحافل الدولية إلى بقايا إنسان..ذاك هو الواقع الذي لا بد من معرفته حول حقيقة المواطن التونسي محمد علي المنصوري... حياة هذا الرجل انقلبت رأسا على عقب. فبعد أن كان بطلا وصاحب أملاك فقد كل شيء في لحظة فأصبح لا ينام ولا يصحو إلا على المأساة التي عاشها لسنوات وذاق فيها أشد أنواع الشعور بالمهانة والظلم وما رأته عيناه يفوق الوصف وتعجز الكلمات عن النطق به...وهاهو يسرد قصة حياته منذ كان يافعا إلى أن أصبح على تلك الحالة.
يقول محدثنا:»ولدت في وسط ريفي بمنطقة برقوالتابعة لولاية سليانة حيث تشبعت بالمبادئ والقيم وعشت مع زوج أمي بما أن والدي كانا مطلقين الى أن بلغت سن الثانية عشرة، إذ تحملت أعباء الحياة منذ الصغرولم أنعم بطفولتي كأترابي فألهو وألعب بل شمرت على ساعدي وعولت على نفسي واشتغلت في عدة ميادين منها الفلاحة ... ولما بلغت سن الثامنة عشرة عملت في بعض المحلات المختصة في صنع الحلويات والمطاعم».
شجار حولني الى ملاكم محترف
«وفي سنة 1967 ولما كنت أباشر عملي بمحل لبيع الحلويات بالجبل الأحمر»-يتابع محمد علي-» التقيت وعن طريق الصدفة بملاكم.. كان شابا مفتول العضلات شرع في التفوه بكلام بذيء مستغلا فتوته فقررت أن أضع له حدا وتخاصمت معه وكانت الغلبة لي، لقد كنت شابا مفتول العضلات قوي البنية ولكني لم أستغل اللياقة البدنية التي كنت أتمتع بها في ايذاء الآخرين بل في الدفاع عنهم . وبعد أن انتصرت عليه غادرالمحل فتتبعت خطاه الى النادي الذي يتدرب فيه وانطلقت حكايتي مع الملاكمة إذ أني انخرطت في التدريب بالملعب التونسي اختصاص ملاكمة».
وأضاف:» ذات يوم قدم حريف أجنبي إلى المحل ولما علم أني أمارس رياضة الملاكمة اقترح علي أن أسافر الى «نوفال كاليدوني» وهي منطقة تبعد على أستراليا أكثر من 150 كلم فرحبت باقتراحه وفرحت كثيرا وحلمت بعالم الأضواء والشهرة وكان يحدوني أمل كبير في رفع المداليات الذهبية ورفع علم تونس وتحقيق النجاح وحلمت وحلمت».
... وتحقق الحلم
«وتحقق حلمي فعلا...«يتابع محمد علي-»فبعد أن سافر الأجنبي أرسل الي تذكرة سفر فسافرت يوم 26 مارس 1977 وأنا أحمل معي العديد من الأحلام والأماني ووصلت الى «نوفال كاليدوني» مدينة الأحلام يوم 31 مارس فاستقبلني ذلك الأجنبي الذي كان يعمل طبيبا أحسن استقبال ثم مكنني من عقد عمل كرئيس مطبخ بمحل لبيع المرطبات وكما يقول المثل الشعبي«ضحكتلي الدنيا» إذ كنت أتقاضى شهريا 8 آلاف دينار تونسي أما الأكل والشرب والسكن فكان على صاحب المحل الذي كنت أعمل به ورغم أني حققت جزءا مما أردته في هذه الحياة وهو تحقيق العيش الكريم فإنني لم أنس الهدف الأساسي الذي جئت من أجله وهي الملاكمة فقد انخرطت في ناد للملاكمة وشيئا فشيئا تحسنت وضعيتي المادية وفتحت مطعما لبيع الأكلة التونسية ووشحته بعلم تونس الخضراء كما «وشمت» شعار بلدي قريبا من صدري كي تظل تونس دائما في قلبي فأنا متعلق بتونس الى حد النخاع وبعد أن فتحت مطعما للأكلة التونسية ذاع صيت الأكلة التونسية وأقبل علي العديد من الحرفاء من كافة أنحاء العالم الذين كانوا معجبين كثيرا بالأطباق التونسية من « كسكسي «و» صحن تونسي» وغيره من الأكلات ... ثم تزوجت من أسترالية ورزقت ببنت سميتها مريم».
رفضت الصعود الى الحلبة دون علم تونس
وبتنهيدة فيها الكثير من الألم والمعاناة يواصل محدثنا سرد قصة حياته قائلا:» تحققت أحلامي وتحولت من ذلك الفتى الفقير الى رجل أعمال ثري وملاكم محترف ومن الصنف الأول وتبناني ناد هناك ولعبت خمس عشرة مباراة مع عدة أبطال وشرفت بلادي وكنت أرفض الصعود الى الحلبة دون علم تونس ولعبت مع عدد من أبطال العالم في الملاكمة وتحصلت على سبع مداليات ذهبية ولكن ..».
عصابة تتاجر في الأعضاء
وأضاف محمد علي:»بعد أن كونت ثروة طائلة قررت العودة الى أرض الوطن لأستثمر ما جنيته من أموال في بلادي فعدت وبحوزتي ملياران و نصف سنة 1992 وفتحت مطعما في الحمامات وآخر في تونس العاصمة وكنت أظن أني سأحقق العيش الهنيء ولكن جرت الرياح بما لا تشتهيه السفن... فذات مرة ولما كنت بأحد النزل بالعاصمة كان بالقرب من الطاولة التي أجلس عليها مجموعة من الأجانب وبعض التونسيين يتجاذبون أطراف الحديث باللغة الأنقليزية حول التجارة في الأعضاء وكيف أن القلب بلغ ثمنه 700 ألف دينار بالعملة التونسية و الكلية بلغ ثمنها 100 ألف دينار وتحدثوا أيضا على المتاجرة بالأعضاء بالنسبة لكبار السن والأطفال ثم اتفقوا على اللقاء بنزل بالحمامات فاقتفيت أثرهم الى النزل الذي اتفقوا على اللقاء به والتقطت لهم صورا وسجلت حديثهم دون أن يتفطنوا الي ثم قفلت راجعا الى تونس العاصمة وتوجهت مسرعا الى قصر الرئاسة وأخبرت مكتب الإستقبال بالأمر عن تلك العصابة وأمديتهم برقم هاتفي القار وعنواني فدفعت الثمن غاليا..إذ عندما عدت الى منزلي فوجئت بأعوان الأمن يداهمون محل سكناي وكان ذلك في حدود الساعة الواحدة من فجر يوم 21 مارس 2000 وأودعت السجن يوم 25 مارس من نفس السنة بتهمة ملفقة وهي الزنا رغم أني لا أعرف المرأة التي اتهمت بالزنا معها ولم أر حتى وجهها ولم تتم مكافحتي بها وقبل ذلك ورطني أعوان الأمن في قضية مخدرات وبقيت موقوفا من أجلها لمدة عام ثم حفظت التهمة في حقي لإنعدام دليل إدانتي».
السجن
يواصل محمد علي حديثه قائلا: « لما كشفت عن العصابة لفقوا لي تهمة الزنا وأحلت على قاضي التحقيق بمحكمة تونس ولما طلبت من القاضي اجراء اختبار طبي قال لي: «عليك أن تنتظر ثلاثة أيام فالأوامر جايا من فوق» ثم أودعت سجن 9 أفريل يوم 27 مارس من سنة 2000 ، وأول مرة تطأ قدماي السجن ذلك العالم الغريب الذي دخلته واكتشفت خباياه لأول مرة في حياتي،عالم يعيشه السجين بقساوته وآلامه لوحده فأول مرة اكتشفت أن الحرية لا تشترى بالمال وأن يوم واحد في السجن هو عبارة عن ألف سنة ، كنت أشعر أني في كابوس مزعج ففي ذلك المكان ووراء أسواره تعيش المأساة والظلم والاضطهاد فالسجين مثل العبد لا يتمتع بأي حق في تلك الفترة».
تعذيب مجاني
وأضاف محمد علي:« لما كنت بساحة السجن ناداني عون سجون ورافقته الى مكتب أحد المسؤولين حيث سألني عن سبب دخولي في إضراب جوع فنفيت ذلك وأكدت له أني كنت أحتسي قهوة وأدخن سيجارة قبل المجيء بي الى مكتبه... وبعد أن استفسرني تم نقلي الى «السيلون» وهي غرفة انفرادية يذوق فيها السجين ألوان التعذيب حيث وجدت أربعة أعوان سجون بانتظاري وبصحبتهم أحد المساجين ثم فوجئت بهم يهوون علي بعصا غليظة على ساقي ثم قيدوني بالسلاسل حيث تم شد يدي الى الخلف بواسطة سلسلة حديدية كما تم تقييدي من رجلي بواسطة سلاسل حديدية حتى ظهري لم يسلم من التقييد بالسلاسل ثم شرع الأعوان في ضربي ولما خارت قوايا نقلوني الى مستودع للأدوية وتركوني هناك من يوم 27 مارس الى 8 أفريل من سنة 2000 وبقيت على تلك الحالة دون أكل أو شرب حتى خارت قوايا ولم أعد قادرا على الوقوف ولولا أحد السجناء الذي كان يمدني بقليل من الماء بعيدا عن أعين السجانين لفارقت الحياة».
أنقذتني العدالة الإلاهية
واصل محدثنا سرد معاناته بالقول:« لما كنت داخل مستودع الأدوية غير قادر على الحراك دخل شخص أجنبي الى المستودع فاستفسر الأعوان عن سبب وجودي ثم طلب منهم أن يتركوه بمفرده معي فسمحوا له بالتحدث معي عندها استغللت الفرصة وأخبرته باللهجة التي يفهمها وهي الأنقليزية بأمري ولما خاف أعوان السجون والمسؤولين من افتضاح أمرهم تم نقلي الى مستشفى «شارل نيكول» وأودعت بقسم الإنعاش لأن ساقي تضررتا كثيرا وقرر الأطباء بعد إجراء الفحوصات بترهما من الركبتين فرفضت ثم اقتنعت بعد ذلك تفاديا لما هو أسوأ فقرر الأطباء إجراء عملية جراحية ثانية تمثلت في بتر ساقي من الفخذين حتى لا يتعكر وضعي الصحي أكثر فأكثر وكنت أتجرع تلك الآلام لوحدي ولم أخبر زوجتي وابنتي المقيمتين بالخارج بذلك ثم لما حاولتا استفساري عن سبب تأخري في زيارتهما أخبرتهما هاتفيا أني تعرضت الى حادث مرور». وأضاف:« بعد أن بترت ساقاي تقدمت بقضية في التعويض عن الضرر المادي والمعنوي وطلب محامي من المحكمة تعويضا بمليارين ونصف ولكني لم أتسلم من المبلغ سوى 306 آلاف دينار كتسبقة فاشتريت بواسطتها قطعة أرض تمسح 50 هكتارا كانت تحتوي على الآثار و« التبر» يعني الذهب سلمته الى السلطات المختصة».
من ملاكم الى متسول
يتنهد محمد علي ويضيف:« خسرت كل شيء « صحتي » ومالي وعائلتي و صرت عاجزا عن قضائي لشؤوني فاستغل بعض الأشخاص الوضع واستولوا على أرزاقي من أراض ومواشي مستغلين في ذلك علاقتهم بعصابات بن علي ولم أستيقظ الا وأنا خالي الجيب فلا مال ولا صحة ولا سند وشيئا فشيئا صرت عاجزا عن توفير لقمة عيشي فاضطريت الى مد يدي الى الغير مكرها وكنت أشعر بمرارة كبيرة فكيف سـأقبل هذا الوضع وأتحول من رجل أعمال وملاكم لعب مع أبطال العالم الى متسول لا حول له ولا قوة . فقد كنت أموت في اليوم ألف مرة وما كان يهون علي هو الحمام الذي ولعت بتربيته واتخذته صديقا لي يواسيني في محنتي وصرنا نخاطب بعضنا بالإشارة فكان يفهم ما أقول لا بل يشعر أن بداخلي حزنا كبيرا لا يمكن أن يمحيه الزمن.. إنه بمثابة المتنفس الذي يخفف عني أحزاني ورغم حالة العجز التي أنا عليها لم أسلم من مضايقات أعوان الأمن الذين ظلوا يلاحقونني الى حد الآن».
محاولة قتل فاشلة
وأضاف:«ذات مرة لما كنت أسير على كرسيّ المتحرك بشارع 9 أفريل مرفوقا بشخص آخر فوجئت بسيارة تعمدت الإصطدام بي كان على متنها شخصان أحدهما يعمل ملازما بالسجون فأصبت بأضرار برأسي ولما كنت ملقى أرضا شاهدت وسمعت ملازما آخر كان موجودا في العملية التي يبدو أنها منسقة ومرتبة سب الجلالة وقال حرفيا: « ماماتش؟» فلم يكتفوا بذلك أي بعض أعوان الأمن بل واصلوا تضييق الخناق علي حتى إنه كلما تسوغت شقة بسيطة لأعيش فيها إلا وتم إخراجي بالقوة العامة منها وآخر مرة تعرضت الى مظلمة من طرف بعض أعوان الأمن يوم 31 مارس 2011 حيث كنت متسوغا لـ»ستوديو» بـ 8 مكرر نهج الإدريسي تم إخراجي عنوة من الشقة وإجباري على العيش بنزل» بالباساج» واضطررت الى دفع 15 دينارا تكلفة الليلة الواحدة.. نعم 15 دينارا دون الأكل أوالشرب».
صمت محمد علي ثم واصل حديثه:» رغم الظلم الذي تعرضت اليه من قبل الأربعة سجانين وما سببوه لي من آلام ومعاناة الا أني أرفض المتاجرة السياسية بقضيتي».
ما حكاية الحمام؟
وعن علاقته الوطيدة مع الحمام يقول:«حكايتي مع الحمام هي حكايتي مع السلام، فالحمام هو رمز للسلام فقد ولعت بتربيته في منزلي ثم جلبته هنا الى جامع الفتح وشيئا فشيئا تكاثر وصرنا أنا وهو نفهم بعضنا البعض وكنت كلما أتحول الى أي مكان يتحول الحمام معي ثم يعود حتى لو ذهبت الى ولاية أخرى يرافقني ثم يعود فالعلاقة متجذرة بيننا». وأثناء تحادثنا مع محمد علي المنصوري نادى على الحمام بالأنقليزية ففهمه كما يقول المثل الشعبي « على الرمش « وأقبل نحوه مرفرفا فمحمد علي يتقن عدة لغات كالأنقليزية والألمانية والإيطالية والأسترالية وعدة لغات أخرى. ولما سألته عن كيفية تـأقلمه مع وضعه الحالي خاصة لما كان يتمتع به من ثراء وشهرة اغرورقت عيناه بالدموع وخانته الكلمات واختنق بالعبرات واكتفى بدمعة كانت كافية للإجابة عن سؤالي. وختم حديثه قائلا: « طلبي الآن من السلط التونسية هو استرداد ما تخلد بذمة الدولة لفائدتي من أموال والمقدرة بـ 4 مليارات أو سأتقدم بقضية الى المحكمة الدولية والتخلي عن جنسيتي كتونسي لأني اكتويت بنار التعذيب والظلم وفقدت أعزما لدي في الحياة وهي» الصحة» التي لا يمكن أن تشترى بالمال». هذه حكاية محمد على المنصوري الملاكم التونسي الذي طالما رفع العديد من البطولات في استراليا وشرف وطنه ولكن دفع جراء تعرضه الى التعذيب الثمن غاليا وضاعت أحلامه وآماله، فقضية محمد على المنصوري ليست قضية شخص بل قضية أشخاص مثله نالهم التعذيب ما نال في العهد البائد فمنهم من مات ومنهم من كتب له العيش بعاهات مختلفة... ولكن مهما انسدت السبل أمامنا فالأمل يبقى دائما.. إذ لولا فسحة الأمل لكان العيش ضيقا ولكانت الحياة قاتمة وكئيبة.');
        $actionMax->setPlace('أريانة');
        $actionMax->setFacts('لما كشفت عن العصابة لفقوا لي تهمة الزنا وأحلت على قاضي التحقيق');
        $actionMax->setLocale('Ar');

        $manager->persist($actionMax);

        $manager->flush();
        
        $this->addReference('launch', $actionMax);
        $this->addReference('doctor', $actionMin);
        
    }

    public function getOrder() {
        return 3;
    }

}
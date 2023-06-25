<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'mmtkalayci@gmail.com',
            'password' => bcrypt('123')
        ]);

        DB::table('configs')->insert([
            'phone' => '+905388746797',
            'email1' => 'muhasebe@asilgeridonusum.com',
            'email2' => 'teknik@asilgeridonusum.com',
            'email3' => 'export@asilgeridonusum.com',
            'address' => 'Büyükkayacık OSB Mah. Kuddusi Cd. No: 17/1 SELÇUKLU / KONYA',
            'gmap_url' => 'https://goo.gl/maps/nDrM7MBesKoRFt5T7',
            'opening_hours' => 'Pazartesi - Cuma 08:00 - 18:00',
            'facebook' => '',
            'instagram' => 'https://www.instagram.com/asilmakinaplastik/',
            'twitter' => '',
            'linkedin' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $about_tr = <<<XML
<p style="text-align:justify">Vizyonumuz, Arge ve Teknoloji&#39;yi kullanarak yenilik&ccedil;i &uuml;retim ve &uuml;r&uuml;n gamı sağlamak, m&uuml;şteri odaklı, kendini geliştiren, sekt&ouml;r&uuml;nde lider, rekabet&ccedil;i, sunmuş olduğu &uuml;r&uuml;n ve hizmete satış sonrası desteğini s&uuml;rd&uuml;ren, uluslararası standartlarda &uuml;r&uuml;n ve hizmet sunmayı kendisine prensip edinmiş, iyi eğitilmiş, tam donanımlı, yetenekli, &ccedil;alışanlara sahip, kendi faaliyet alanında fark yaratarak s&uuml;rekli lider olmayı başarabilen bir firma olmayı başarmaktır.</p><p style="text-align:justify">2019 yılında maksimum verim ve minimum maliyet ilkesiyle hizmet veren, y&uuml;ksek teknolojili, &ccedil;evre dostu plastik makinaları ve plastik geri d&ouml;n&uuml;ş&uuml;m makinaları &uuml;reterek &uuml;lkemiz ekonomisine katma değer sağlamaktayız. yenilik&ccedil;i, akılcı, ilkeli ve sorumlu yaklaşımımızla sekt&ouml;r&uuml;m&uuml;zde d&uuml;nyanın tercih ettiği marka olma yolunda emin adımlarla ilerlemekte olan firmamız &nbsp;asil geri d&ouml;n&uuml;ş&uuml;m plastik makina sanayi ve tic. ltd. şti., konya 3. organize sanayi b&ouml;lgesinde 6000 metrekare kapalı 6000 metrekare a&ccedil;ık olmak &uuml;zere toplam 12000 metrekare fabrika sahasında, kurulduğu g&uuml;nden bu yana, &uuml;retmiş olduğu kaliteli &uuml;r&uuml;nleri ile m&uuml;şterilerinin ihtiya&ccedil;larını rekabet &uuml;st&uuml;nl&uuml;ğ&uuml; sağlayacak şekilde karşılamaktır.</p>
XML;

        $about_en = <<<XML
<p style="text-align:justify">Our vision is to become a company that utilizes R&amp;D and technology to provide innovative production and product range. We aim to be customer-focused, self-improving, industry-leading, competitive, and committed to providing post-sales support for our products and services. We adhere to the principle of offering internationally standardized products and services, and we strive to be a continuously leading company by creating a difference in our field of operation.</p><p style="text-align:justify">Since 2019, we have been providing services based on the principle of maximum efficiency and minimum cost, contributing added value to our country&#39;s economy by manufacturing high-tech, environmentally friendly plastic machinery and plastic recycling machinery. Our company, Asil Geri D&ouml;n&uuml;ş&uuml;m Plastik Makina Sanayi ve Tic. Ltd. Şti., is making confident strides towards becoming the preferred brand in our industry with our innovative, rational, principled, and responsible approach. Located in Konya 3rd Organized Industrial Zone, our factory covers a total area of 12,000 square meters, with 6,000 square meters of indoor and outdoor space. Since our establishment, we have been meeting the needs of our customers with high-quality products that provide a competitive advantage.</p>
XML;

        $about_ar = <<<XML
<p style="text-align:justify">رؤيتنا هي توفير مجموعة مبتكرة من الإنتاج والمنتجات باستخدام البحث والتطوير والتكنولوجيا. نحن شركة محورها العميل، متطورة، رائدة في صناعتها، تنافسية، وتوفر الدعم اللازم بعد البيع لمنتجاتها وخدماتها، وتلتزم بتقديم منتجات وخدمات عالمية المستوى. نحن شركة متخصصة ومدربة بشكل جيد، لديها موظفون مجهزون تجهيزًا كاملاً وماهرون في مجال عملهم، وتسعى إلى أن تكون دائمًا الرائدة من خلال خلق فارق في مجالها.</p><p style="text-align:justify">من خلال تقديم آلات بلاستيكية ذات تكنولوجيا عالية وصديقة للبيئة وماكينات إعادة تدوير البلاستيك، ونلتزم بمبدأ تحقيق الكفاءة القصوى والتكلفة الدنيا، نساهم في إضافة قيمة للاقتصاد الوطني. شركتنا المتقدمة والمسؤولة وذات الروح الريادية تتقدم بثبات نحو أن تصبح العلامة التجارية المفضلة عالميًا في صناعتنا. تأسست شركتنا المخصصة لصناعة آلات إعادة تدوير البلاستيك &quot;أسيل غيري دونيوم بلاستيك ماكينا صناعة وتجارة ذ.م.م&quot; في منطقة الصناعة الثالثة بمدينة قونية، وتحتل مساحة مصنعها الإجمالية 12،000 متر مربع، يتكون من 6،000 متر مربع للمساحة المغلقة و 6،000 متر مربع للمساحة المفتوحة. ومنذ تأسيسها، تلبي احتياجات عملائها بمنتجاتها ذات الجودة العالية وبطريقة تؤمن لها الأفضلية التن</p>
XML;


    DB::table('abouts')->insert([
            "title" => "Asil Geri Dönüşüm Plastik Makina Sanayi ve Tic. Ltd. Şti.",
            "about" => $about_tr,
            "about_footer" => "Vizyonumuz, Arge ve Teknoloji'yi kullanarak yenilikçi üretim ve ürün gamı sağlamak, müşteri odaklı, kendini geliştiren, sektöründe lider, rekabetçi, sunmuş olduğu ürün ve hizmete satış sonrası desteğini sürdüren, uluslararası standartlarda ürün ve hizmet sunmayı kendisine prensip edinmiş, iyi eğitilmiş, tam donanımlı, yetenekli, çalışanlara sahip, kendi faaliyet alanında fark yaratarak sürekli lider olmayı başarabilen bir firma olmayı başarmaktır.",
            "mission" => "Doğaya karşı sorumluluklarının bilincinde olup, bu çerçevede, daha yaşanabilir ve sürdürülebilir bir dünya için, yenilikçi bir üretim anlayışı ile kaynakları en verimli şekilde kullanarak kaliteli üretim yapan bir firma olmak. kurumsal ve etik kurallara bağlı, çevreyi gözeten, evrensel ölçülerde; sektöründe lider bir kuruluş olmak.",
            "vision" => "Arge ve teknoloji'yi kullanarak yenilikçi üretim ve ürün gamı sağlamak, müşteri odaklı, kendini geliştiren, sektöründe lider, rekabetçi, sunmuş olduğu ürün ve hizmete satış sonrası desteğini sürdüren, uluslararası standartlarda ürün ve hizmet sunmayı kendisine prensip edinmiş, iyi eğitilmiş, tam donanımlı, yetenekli, çalışanlara sahip, kendi faaliyet alanında fark yaratarak sürekli lider olmayı başarabilen bir firma olmayı başarmaktır.",
            "values" => "İnovasyon, müşteri odaklılığı, sürekli gelişim, üstün kalite, etik değerler, sorumluluk bilinci, insan kaynağına verdiğimiz önem ve liderlik, şirketimizin temel değerlerini oluşturmaktadır. Bu değerler doğrultusunda yenilikçi üretim ve kaliteli hizmet sunarak çevreye duyarlı bir şekilde sektör liderliğini amaçlamaktayız.",
            "promotional_film" => "https://www.youtube.com/watch?v=M_zDZJbYqsE",
            "image" => "uploads/20230621_223548_64937b44a2102.jpg",
            "site" => "Makine",
            "language" => "tr",
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('abouts')->insert([
            "title" => "Asil Geri Dönüşüm Plastik Makina Sanayi ve Tic. Ltd. Şti.",
            "about" => $about_en,
            "about_footer" => "Our vision is to become a company that utilizes R&D and technology to provide innovative production and product range. We aim to be customer-focused, self-improving, industry-leading, competitive, and committed to providing post-sales support for our products and services. We adhere to the principle of offering internationally standardized products and services, and we strive to be a continuously leading company by creating a difference in our field of operation.",
            "mission" => "To be a company that is aware of its responsibilities towards nature and, within this framework, produces high-quality products by using resources in the most efficient manner with an innovative production approach, aiming for a more livable and sustainable world. To be a leading organization in its sector that adheres to corporate and ethical principles, respects the environment, and follows universal standards.",
            "vision" => "The goal is to become a company that utilizes R&D and technology to provide innovative production and product range, customer-oriented, self-improving, industry-leading, competitive, and maintaining post-sales support for the products and services it offers, adhering to international standards of product and service delivery. The company aims to be well-trained, fully equipped, and talented, with capable employees, and to continuously maintain a leading position by creating a difference in its own field of operation.",
            "values" => "Innovation, customer orientation, continuous improvement, superior quality, ethical values, sense of responsibility, the importance we give to human resources, and leadership constitute the fundamental values of our company. In line with these values, we aim to achieve industry leadership by providing innovative production and high-quality services in an environmentally conscious manner.",
            "promotional_film" => "https://www.youtube.com/watch?v=M_zDZJbYqsE",
            "image" => "uploads/20230621_223548_64937b44a2103.jpg",
            "site" => "Makine",
            "language" => "en",
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('abouts')->insert([
            "title" => "Asil Geri Dönüşüm Plastik Makina Sanayi ve Tic. Ltd. Şti.",
            "about" => $about_ar,
            "about_footer" => "رؤيتنا هي توفير مجموعة مبتكرة من الإنتاج والمنتجات باستخدام البحث والتطوير والتكنولوجيا. نحن شركة محورها العميل، متطورة، رائدة في صناعتها، تنافسية، وتوفر الدعم اللازم بعد البيع لمنتجاتها وخدماتها، وتلتزم بتقديم منتجات وخدمات عالمية المستوى. نحن شركة متخصصة ومدربة بشكل جيد، لديها موظفون مجهزون تجهيزًا كاملاً وماهرون في مجال عملهم، وتسعى إلى أن تكون دائمًا الرائدة من خلال خلق فارق في مجالها.",
            "mission" => "أن تكون الشركة التي تدرك مسؤولياتها تجاه الطبيعة، وفي هذا الإطار، تنتج منتجات عالية الجودة باستخدام الموارد بأكثر الطرق كفاءة، بمنهجية إنتاج مبتكرة، بهدف خلق عالم أكثر قابلية للعيش والاستدامة. أن تكون منظمة رائدة في قطاعها تلتزم بالمبادئ الشركاتية والأخلاقية، وتحترم البيئة وتتبع المعايير العالمية.",
            "vision" => "الهدف هو أن تصبح الشركة شركة تستخدم البحث والتطوير والتكنولوجيا لتوفير إنتاج ومجموعة منتجات مبتكرة ، وتوجه العملاء ، وتحسين الذات ، وتتصدر الصناعة ، وتكون تنافسية ، وتحافظ على الدعم بعد البيع للمنتجات والخدمات التي تقدمها ، والالتزام بالمعايير الدولية لتسليم المنتجات والخدمات. تهدف الشركة إلى أن تكون مدربة جيدًا ومجهزة تجهيزًا كاملاً ، ولديها موظفين ماهرين ، وأن تحافظ بشكل مستمر على موقع ريادي من خلال خلق فرق في مجال عملها الخاص.",
            "values" => "الابتكار وتوجه العملاء والتحسين المستمر والجودة العالية والقيم الأخلاقية والشعور بالمسؤولية والأهمية التي نوليها للموارد البشرية والقيادة تشكل القيم الأساسية لشركتنا. واستنادًا إلى هذه القيم، نهدف إلى تحقيق قيادة الصناعة من خلال توفير إنتاج مبتكر وخدمات عالية الجودة بطريقة توعو بالبيئة.",
            "promotional_film" => "https://www.youtube.com/watch?v=M_zDZJbYqsE",
            "image" => "uploads/20230621_223548_64937b44a2104.jpg",
            "site" => "Makine",
            "language" => "ar",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $about_tr = <<<XML
<p style="text-align:justify">Vizyonumuz, Arge ve Teknoloji&#39;yi kullanarak yenilik&ccedil;i &uuml;retim ve &uuml;r&uuml;n gamı sağlamak, m&uuml;şteri odaklı, kendini geliştiren, sekt&ouml;r&uuml;nde lider, rekabet&ccedil;i, sunmuş olduğu &uuml;r&uuml;n ve hizmete satış sonrası desteğini s&uuml;rd&uuml;ren, uluslararası standartlarda &uuml;r&uuml;n ve hizmet sunmayı kendisine prensip edinmiş, iyi eğitilmiş, tam donanımlı, yetenekli, &ccedil;alışanlara sahip, kendi faaliyet alanında fark yaratarak s&uuml;rekli lider olmayı başarabilen bir firma olmayı başarmaktır.</p><p style="text-align:justify">2019 yılında &#39;&#39;Doğadaki atık plastik (LDPE, HDPE, PVC, PP, PS ve POM) maddelerin, geri d&ouml;n&uuml;ş&uuml;m yoluyla yeniden kazanılmasını sağlamak, geleceğimiz olan &ccedil;ocuklara iyi bir &ccedil;evre bırakmaya katkıda bulunmak&#39;&#39; ilkesiyle yola &ccedil;ıkan Asil Geri D&ouml;n&uuml;ş&uuml;m Plastik Makina Sanayi ve Tic. Ltd. Şti., Konya 3. Organize Sanayi B&ouml;lgesinde 6000 metrekare kapalı 6000 metrekare a&ccedil;ık olmak &uuml;zere toplam 12000 metrekare fabrika sahasında, kurulduğu g&uuml;nden bu yana, &uuml;retmiş olduğu kaliteli &uuml;r&uuml;nleri ile m&uuml;şterilerinin ihtiya&ccedil;larını rekabet &uuml;st&uuml;nl&uuml;ğ&uuml; sağlayacak şekilde karşılamaktır.</p>
XML;

        $about_en = <<<XML
<p style="text-align:justify">Our vision is to become a company that utilizes R&amp;D and technology to provide innovative production and product range, customer-oriented, self-improving, industry-leading, competitive, and committed to providing post-sales support for its products and services. We have adopted the principle of providing products and services at international standards, being well-trained, fully equipped, talented, and having employees who can continuously excel in their field of operation.</p><p style="text-align:justify">Established in 2019 with the principle of &quot;ensuring the recovery of waste plastics (LDPE, HDPE, PVC, PP, PS, and POM) in nature through recycling, and contributing to leaving a good environment for our future children,&quot; Asil Recycling Plastic Machinery Industry and Trade Ltd. Co., located in Konya 3rd Organized Industrial Zone, operates on a total area of 12,000 square meters, with 6,000 square meters of closed and 6,000 square meters of open factory space. Since its establishment, the company has been meeting the needs of its customers with high-quality products that provide a competitive advantage.</p>
XML;

$about_ar = <<<XML
<p style="text-align:justify">رؤيتنا هي توفير تشكيلة مبتكرة من الإنتاج والمنتجات باستخدام البحث والتطوير والتكنولوجيا، وتكون موجهة نحو العملاء وقابلة للتطوير وتكون رائدة في صناعتها وتتميز بالتنافسية وتستمر في تقديم الدعم لمنتجاتها وخدماتها بعد البيع، وأن تكون ملتزمة بتقديم منتجات وخدمات عالمية المستوى، وأن تكون لديها موظفين جيدين التدريب ومجهزين بشكل جيد وموهوبين، وأن تحقق نجاحًا مستمرًا في أن تكون الشركة الرائدة في مجالها من خلال خلق فرق في مجال نشاطها.</p><p style="text-align:justify">تأسست Asil Geri D&ouml;n&uuml;ş&uuml;m Plastik Makina Sanayi ve Tic. Ltd. Şti. في عام 2019 بهدف &quot;إعادة استخدام المواد البلاستيكية المهملة في الطبيعة (LDPE ، HDPE ، PVC ، PP ، PS و POM) من خلال عملية التدوير والمساهمة في توفير بيئة جيدة لأطفالنا المستقبليين&quot;. ومنذ تأسيسها في منطقة الصناعة الثالثة في كونيا، تلبت الشركة احتياجات عملائها بمنتجاتها ذات الجودة العالية وتوفير ميزة تنافسية لهم، وذلك في مساحة مصنع تبلغ 12000 متر مربع، تتكون من 6000 متر مربع مغلقة و 6000 متر مربع مفتوحة.</p>
XML;


        DB::table('abouts')->insert([
            "title" => "Asil Geri Dönüşüm Plastik Makina Sanayi ve Tic. Ltd. Şti.",
            "about" => $about_tr,
            "about_footer" => "Vizyonumuz, Arge ve Teknoloji'yi kullanarak yenilikçi üretim ve ürün gamı sağlamak, müşteri odaklı, kendini geliştiren, sektöründe lider, rekabetçi, sunmuş olduğu ürün ve hizmete satış sonrası desteğini sürdüren, uluslararası standartlarda ürün ve hizmet sunmayı kendisine prensip edinmiş, iyi eğitilmiş, tam donanımlı, yetenekli, çalışanlara sahip, kendi faaliyet alanında fark yaratarak sürekli lider olmayı başarabilen bir firma olmayı başarmaktır.",
            "mission" => "Doğaya karşı sorumluluklarının bilincinde olup, bu çerçevede, daha yaşanabilir ve sürdürülebilir bir dünya için, yenilikçi bir üretim anlayışı ile kaynakları en verimli şekilde kullanarak kaliteli üretim yapan bir firma olmak. kurumsal ve etik kurallara bağlı, çevreyi gözeten, evrensel ölçülerde; sektöründe lider bir kuruluş olmak.",
            "vision" => "Arge ve teknoloji'yi kullanarak yenilikçi üretim ve ürün gamı sağlamak, müşteri odaklı, kendini geliştiren, sektöründe lider, rekabetçi, sunmuş olduğu ürün ve hizmete satış sonrası desteğini sürdüren, uluslararası standartlarda ürün ve hizmet sunmayı kendisine prensip edinmiş, iyi eğitilmiş, tam donanımlı, yetenekli, çalışanlara sahip, kendi faaliyet alanında fark yaratarak sürekli lider olmayı başarabilen bir firma olmayı başarmaktır.",
            "values" => "İnovasyon, müşteri odaklılığı, sürekli gelişim, üstün kalite, etik değerler, sorumluluk bilinci, insan kaynağına verdiğimiz önem ve liderlik, şirketimizin temel değerlerini oluşturmaktadır. Bu değerler doğrultusunda yenilikçi üretim ve kaliteli hizmet sunarak çevreye duyarlı bir şekilde sektör liderliğini amaçlamaktayız.",
            "promotional_film" => "https://www.youtube.com/watch?v=M_zDZJbYqsE",
            "image" => "uploads/20230621_223548_64937b44a2105.jpg",
            "site" => "Plastik",
            "language" => "tr",
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('abouts')->insert([
            "title" => "Asil Geri Dönüşüm Plastik Makina Sanayi ve Tic. Ltd. Şti.",
            "about" => $about_en,
            "about_footer" => "Our vision is to become a company that utilizes R&D and technology to provide innovative production and product range, customer-oriented, self-improving, industry-leading, competitive, and committed to providing post-sales support for its products and services. We have adopted the principle of providing products and services at international standards, being well-trained, fully equipped, talented, and having employees who can continuously excel in their field of operation.",
            "mission" => "To be a company that is aware of its responsibilities towards nature and, within this framework, produces high-quality products by using resources in the most efficient manner with an innovative production approach, aiming for a more livable and sustainable world. To be a leading organization in its sector that adheres to corporate and ethical principles, respects the environment, and follows universal standards.",
            "vision" => "The goal is to become a company that utilizes R&D and technology to provide innovative production and product range, customer-oriented, self-improving, industry-leading, competitive, and maintaining post-sales support for the products and services it offers, adhering to international standards of product and service delivery. The company aims to be well-trained, fully equipped, and talented, with capable employees, and to continuously maintain a leading position by creating a difference in its own field of operation.",
            "values" => "Innovation, customer orientation, continuous improvement, superior quality, ethical values, sense of responsibility, the importance we give to human resources, and leadership constitute the fundamental values of our company. In line with these values, we aim to achieve industry leadership by providing innovative production and high-quality services in an environmentally conscious manner.",
            "promotional_film" => "https://www.youtube.com/watch?v=M_zDZJbYqsE",
            "image" => "uploads/20230621_223548_64937b44a2106.jpg",
            "site" => "Plastik",
            "language" => "en",
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('abouts')->insert([
            "title" => "Asil Geri Dönüşüm Plastik Makina Sanayi ve Tic. Ltd. Şti.",
            "about" => $about_ar,
            "about_footer" => "رؤيتنا هي توفير تشكيلة مبتكرة من الإنتاج والمنتجات باستخدام البحث والتطوير والتكنولوجيا، وتكون موجهة نحو العملاء وقابلة للتطوير وتكون رائدة في صناعتها وتتميز بالتنافسية وتستمر في تقديم الدعم لمنتجاتها وخدماتها بعد البيع، وأن تكون ملتزمة بتقديم منتجات وخدمات عالمية المستوى، وأن تكون لديها موظفين جيدين التدريب ومجهزين بشكل جيد وموهوبين، وأن تحقق نجاحًا مستمرًا في أن تكون الشركة الرائدة في مجالها من خلال خلق فرق في مجال نشاطها.",
            "mission" => "أن تكون الشركة التي تدرك مسؤولياتها تجاه الطبيعة، وفي هذا الإطار، تنتج منتجات عالية الجودة باستخدام الموارد بأكثر الطرق كفاءة، بمنهجية إنتاج مبتكرة، بهدف خلق عالم أكثر قابلية للعيش والاستدامة. أن تكون منظمة رائدة في قطاعها تلتزم بالمبادئ الشركاتية والأخلاقية، وتحترم البيئة وتتبع المعايير العالمية.",
            "vision" => "الهدف هو أن تصبح الشركة شركة تستخدم البحث والتطوير والتكنولوجيا لتوفير إنتاج ومجموعة منتجات مبتكرة ، وتوجه العملاء ، وتحسين الذات ، وتتصدر الصناعة ، وتكون تنافسية ، وتحافظ على الدعم بعد البيع للمنتجات والخدمات التي تقدمها ، والالتزام بالمعايير الدولية لتسليم المنتجات والخدمات. تهدف الشركة إلى أن تكون مدربة جيدًا ومجهزة تجهيزًا كاملاً ، ولديها موظفين ماهرين ، وأن تحافظ بشكل مستمر على موقع ريادي من خلال خلق فرق في مجال عملها الخاص.",
            "values" => "الابتكار وتوجه العملاء والتحسين المستمر والجودة العالية والقيم الأخلاقية والشعور بالمسؤولية والأهمية التي نوليها للموارد البشرية والقيادة تشكل القيم الأساسية لشركتنا. واستنادًا إلى هذه القيم، نهدف إلى تحقيق قيادة الصناعة من خلال توفير إنتاج مبتكر وخدمات عالية الجودة بطريقة توعو بالبيئة.",
            "promotional_film" => "https://www.youtube.com/watch?v=M_zDZJbYqsE",
            "image" => "uploads/20230621_223548_64937b44a2107.jpg",
            "site" => "Plastik",
            "language" => "ar",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        /***************************************************/
        /*SLIDER*/
        /***************************************************/
        DB::table('slides')->insert([
            "title" => "Geri Dönüşüm Makina Teknolojisi!",
            "description" => "Yenilikçi teknolojimizle sektöre yön veriyoruz.",
            "image" => "uploads/1.jpg",
            "site" => "Makine",
            "language" => "tr",
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('slides')->insert([
            "title" => "Sektördeki Tecrübemizi Makinaya Aktarıyoruz!",
            "description" => "",
            "image" => "uploads/2.jpg",
            "site" => "Makine",
            "language" => "tr",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('slides')->insert([
            "title" => "Recycling Machine Technology!",
            "description" => "We are shaping the industry with our innovative technology.",
            "image" => "uploads/3.jpg",
            "site" => "Makine",
            "language" => "en",
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('slides')->insert([
            "title" => "Transferring Our Experience in the Industry to the Machine!",
            "description" => "",
            "image" => "uploads/4.jpg",
            "site" => "Makine",
            "language" => "en",
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('slides')->insert([
            "title" => "تكنولوجيا آلات إعادة التدوير!",
            "description" => "نحن نمهد الطريق في الصناعة بتقنيتنا المبتكرة.",
            "image" => "uploads/5.jpg",
            "site" => "Makine",
            "language" => "ar",
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('slides')->insert([
            "title" => "نحن ننقل خبرتنا في القطاع إلى الآلة!",
            "description" => "",
            "image" => "uploads/6.jpg",
            "site" => "Makine",
            "language" => "ar",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

/************************/
        DB::table('slides')->insert([
            "title" => "Dünyamız İçin Geri Dönüştürüyoruz!",
            "description" => "Atıkları temiz yarınlar için geri dönüştürüyoruz.",
            "image" => "uploads/7.jpg",
            "site" => "Plastik",
            "language" => "tr",
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('slides')->insert([
            "title" => "Atıkları Değere Dönüştürüyoruz!",
            "description" => "",
            "image" => "uploads/8.jpg",
            "site" => "Plastik",
            "language" => "tr",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('slides')->insert([
            "title" => "We Recycle for Our World!",
            "description" => "We recycle waste for a cleaner tomorrow.",
            "image" => "uploads/9.jpg",
            "site" => "Plastik",
            "language" => "en",
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('slides')->insert([
            "title" => "We're Turning Waste into Value!",
            "description" => "",
            "image" => "uploads/10.jpg",
            "site" => "Plastik",
            "language" => "en",
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('slides')->insert([
            "title" => "نحن نعيد التدوير من أجل كوكبنا!",
            "description" => "نحن نعيد تدوير النفايات من أجل غدٍ نظيف.",
            "image" => "uploads/11.jpg",
            "site" => "Plastik",
            "language" => "ar",
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('slides')->insert([
            "title" => "نحن نحول النفايات إلى قيمة!",
            "description" => "",
            "image" => "uploads/12.jpg",
            "site" => "Plastik",
            "language" => "ar",
            'created_at' => now(),
            'updated_at' => now(),
        ]);



    }
}

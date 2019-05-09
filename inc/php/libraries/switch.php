<?php
$uriPage = basename($_SERVER['REQUEST_URI']);

    switch ($uriPage) {
        case 'gamification';
            $PAGE_TITLE = 'Gamification of Education';
            $TITLE = 'Gamification of Education';
            $BACKGROUND = '<div class="background"></div>';
            $SECTION_BGIMG = '../img/virtual-reality-1920.jpg';
            $CSS_PATH = '<link rel="stylesheet" href="../inc/css/background.css"><link href="./css/gamification.css" rel="stylesheet">';
            $PARAGRAPH = (object) [
                'copy1' => (object) ['title' => 'VIRTUAL REALITY', 'item1' => 'Virtual Reality allows our children to “learn by doing” which promotes sensory recall, memory and critical thinking.', 'item2' => 'Virtual Reality is a powerful tool to teach empathy'],
                'copy2' => (object) ['title' => 'How it Works', 'item1' => '
                <p class="text2">Participants work through ten choice-driven VRCs (Virtual
                Reality Checks), each choice leading to another. They are
                scored on their responses (10-5-0) with a maximum score
                of 100, but their scores are not shown to them. At the end
                of their session, they see a color-coded replay showing
                right & wrong choices as green and red. They are also
                shown ideas on how to respond to given situations so that
                they can learn how to handle peer pressure.</p>
                
                <p class="text2">Over the next 30 days participants are sent texts and
                words of encouragement to reinforce making right choices.
                They are also given real world exercises with suggestions
                on how to respond. They then retake the VRCs and apply
                the lessons they have learned over the previous 30 days.
                They are scored and their scores are compared to their
                original to see how much progress they have made.
                </p>'],
                'copy3' => (object) ['title' => 'BENEFIT OF VR', 'item1' => '<p>VR has a positive effect on students’ knowledge, attitudes, self-efficacy and behavioral intentions.</p>

                <p>VR allows researchers to immerse students into environments of alcohol/drug consumption and risk-taking, without the physical dangers that these behaviors may lead to in real life.</p>
                
                <p>VR can simulate a ‘learning by doing’ approach, for sensitive topics and illegal behaviors, which could otherwise not be brought into classrooms.<p>
                
                <p>VR offers the potential to build learning experiences that transcend conventional information delivery methods.</p>', 'img' =>'../img/hmd-4140960_640.jpg']
            ];
            
            class Box {
                public function __construct($img, $str1, $str2) {
                    $this->img = $img;
                    $this->str1 = $str1;
                    $this->str2 = $str2;
                }

                public function boxGamification() {
                    $dop = '<div class="box-column-wrapper">';
                    $dop .= '<img src="'.$this->img.'" />';
                    $dop .= '<div class="layer"></div>';
                    $dop .= '<div class="gm-text text2">'.$this->str1.'</div>
                </div>';
                    echo $dop;
                }
            }

            $gamification = array(
                new Box('../img/hmd-4140960_640.jpg', 'is substantially more fun and engaging than traditional methods', ''),
                new Box('../img/vr-3483928_640.jpg', 'allows the neurotransmitters to send signals between neurons', ''),
                new Box('../img/virtual-reality-3368729_640.jpg', 'releases endorphins which improves retention of information', '')
            );            
            break;
        case 'right-choice':
            $PAGE_TITLE ='The Right Choice Campaign';
            $TITLE = 'the right choice campaine';
            $SUBTITLE = ['Helping Kids Make The Right Choice', 'how it works'];
            $BACKGROUND = '<div class="background"></div>';
            $SECTION_BGIMG = '../img/target-1920x640.jpg';
            $CSS_PATH = '<link rel="stylesheet" href="../inc/css/background.css"><link href="./right-choice.css" rel="stylesheet">';
            $PARAGRAPH = '<p style="color: #FBDC2D;">“The Right Choice Campaign is an innovative Strength Based Drug Prevention program intended to build and promote Critical Thinking in our children.
 
            <p style="color: #FBDC2D;">Our program teaches our children how to navigate through some of life’s most difficult situations with clarity and confidence. We use the power of storytelling and VR gamification education to make a deeper and lasting impression in their minds.</p>
             
            <p style="color: #FBDC2D;">Our AI technology allows for prevention, early intervention and the ability to measure impact while enabling us to continue to improve upon how we can best help our children in the way they need it most.”</p>';
            break;
        case 'storytelling':
            $PAGE_TITLE = 'Storytelling';
            $TITLE = 'The Power of Storytelling';
            $SUBTITLE = 'How The Power of Storytelling Works';
            $BACKGROUND = '<div class="background"></div>';
            $SECTION_BGIMG = '../img/library-1920.jpg';
            $CSS_PATH = '<link rel="stylesheet" href="../inc/css/background.css"><link rel="stylesheet" href="./storytelling.css">';
            $IMG_PATH = '../img/library-1920.jpg';
            $PARAGRAPH = (object) [
                'copy1' => (object) ['subtitle' =>'', 'image' => '../img/book.png', 'text' => '<p>Evidence based research has shown that the effects of Storytelling has proven substantial impacts on our brains and is vital to the conversion process. It is the most effective way to stimulate the sensory cortex and a special class of mirror neurons in our brains causing lasting change when reinforced through repetition.</p>     
                <p>Stories are the root of our ability to communicate and understand what’s going on around us and is a very powerful mnemonic device that has lasting effect on our memory and understanding. Storytelling has also been proven to improve children’s overall mental development and shown to improve narrative recall, problem solving, increase literacy, facilitate abstract thinking, self-regulation and boost linguistic abilities.</p>'],
                'copy2' => (object) ['subtitle' => 'The Storytelling Virtual Reality (VR) Technology', 'image'=> '../img/virtual-reality.jpg', 'text' => 'Combining Storytelling with multi-sensory effects of VR technology will undoubtedly optimize the user’s ability to retain pertinent information and tools that will assist them to address critical social issues that are affecting our youth today. Ultimately, educational VR can provide high-impact knowledge with countless possibilities. Its value lies in becoming a part of the lesson plan’s core structure as well as an alternative way to engage students through enhancement to the physical classroom.</p>

                <p>It is not designed to be a replacement. VR is just as much about giving students the opportunity to create a simulated digital world as it is blending the real world and artificial reality together. The uses of digital reality are obvious when thinking of its wow factor but beyond its surface of recreational capabilities research has shown that it can be most beneficial when used in an instructional environment.</p>
            
                <p class="read-more">Read More...</p>
                <p>VR is the next big step forward in education which will be excellent for educators and students alike. Educators will be able to capture the attention of their students like never before and get them more actively involved in the classroom. Students are always trying to do what’s cool and what’s new; utilizing VR technology in classrooms will appeal to students because it’s the latest and greatest thing and it’s very cool to use. Storytelling VR technology will transcend the antiquated delivery of information seen in our schools today and improve comprehensive retention in the different types of learners (Visual, Auditory and Kinesthetic).</p>
            
                <p>The Storytelling VR technology can provide enriched learning environments for students who otherwise may not respond to traditional educational methods. It has the proficiency to deliver countless new immersion concentrations to assist in lesson plans. Research consistently shows that we are moving away from simply ‘learning’ a subject or topic to ‘feeling’ the content. Occasionally students just need to be taken out of a classroom environment and dropped into an immersive world; where they can watch dinosaurs walk around them, experience a performance in a concert hall, or live stream with other students around the world in VR social spaces. The list of apps being generated is dramatically growing, and with every new piece of software, another avenue for learners opens up.</p>
            
                <p>Using this edtech will not only make learning more interesting and exciting to students but it will also dramatically increase retention because it engages them through real time applications in a way which textbooks and lectures simply cannot compete.']
            ];
            $STORY = (object) [
                'story1' => (object) ['icon' => '<i class="fas fa-assistive-listening-systems"></i>', 'title' => 'Neural Coupling', 'text' => 'A story activates parts in the brain that allows the listener to turn the story in to their own ideas and experience thanks to a process called neural coupling.'],
                'story2' => (object) ['icon' => '<i class="fa fa-compress"></i>', 'title' => 'Mirroring', 'text' => 'Listeners will not only experience the similar brain activity to each other, but also to the speaker.'],
                'story3' => (object) ['icon' => '', 'title' => 'Dopamine', 'text' => 'The brain releases dopamine into the system when it experiences an emotionally-charged event, making it easier to remember and with greated accuracy.'],
                'story4' => (object) ['icon' => '', 'title' => 'Cortex Activit', 'text' => 'When processing facts, two areas of the brain are activated. A well-told story can engage many additional areas, including the motor cortex, sensory cortex and frontal cortex.'],
                'image' => (object) ['img' => 'https://wonderseedfoundation.org/wp-content/uploads/2019/03/brain-768x670.png']
            ];
            break;
        case 'contact':
            $PAGE_TITLE = 'Contact Us';
            $TITLE = 'contact us';
            $SUBTITLE= array('contact information','basic information');
            $CSS_PATH = '<link rel="stylesheet" href="../inc/css/background.css"><link href="./css/contact.css" rel="stylesheet">';
            $BACKGROUND = '<div class="background"></div>';
            break;
        case 'donate':
            $PAGE_TITLE = 'Donate';
            $TITLE = 'support us';
            $SUBTITLE = 'help shape the future';
            $CSS_PATH = '<link rel="stylesheet" href="../inc/css/background.css"><link rel="stylesheet" href="./css/donate.css">';
            $BACKGROUND = '<div class="background"></div>';
            class Box {
                public function __construct($icon, $title, $item, $url, $btn) {
                    $this->icon = $icon;
                    $this->title = $title;
                    $this->item = $item;
                    $this->url = $url;
                    $this->btn = $btn;
                }

                public function boxDonate() {
                    $dop = '<div class="donate box-column-wrapper">';
                    $dop .= '<div class="icons">'.$this->icon.'</div>';
                    $dop .= '<h3 class="title uppercase center">'.$this->title.'</h3>';
                    $dop .= '<p class="box-column-description text-sm center">'.$this->item.'</p>';
                    $dop .= '<div class="btn-container uppercase center hd4"><a href="'.$this->url.'" target="_blank" class="btn">'.$this->btn.'</a></div></div>';
                    echo $dop;
                }
            }

            $donate = array(
                0 => new Box('<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="users" class="icon icon-sm" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="#ffffff" d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6 40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z"></path></svg>','join us', 'We welcome you and thank you for your precious time. Please tell us how you would love to participate in our mission!', '#', 'join now'),
                1 => new Box('<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="donate" class="icon icon-sm" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 416c114.9 0 208-93.1 208-208S370.9 0 256 0 48 93.1 48 208s93.1 208 208 208zM233.8 97.4V80.6c0-9.2 7.4-16.6 16.6-16.6h11.1c9.2 0 16.6 7.4 16.6 16.6v17c15.5.8 30.5 6.1 43 15.4 5.6 4.1 6.2 12.3 1.2 17.1L306 145.6c-3.8 3.7-9.5 3.8-14 1-5.4-3.4-11.4-5.1-17.8-5.1h-38.9c-9 0-16.3 8.2-16.3 18.3 0 8.2 5 15.5 12.1 17.6l62.3 18.7c25.7 7.7 43.7 32.4 43.7 60.1 0 34-26.4 61.5-59.1 62.4v16.8c0 9.2-7.4 16.6-16.6 16.6h-11.1c-9.2 0-16.6-7.4-16.6-16.6v-17c-15.5-.8-30.5-6.1-43-15.4-5.6-4.1-6.2-12.3-1.2-17.1l16.3-15.5c3.8-3.7 9.5-3.8 14-1 5.4 3.4 11.4 5.1 17.8 5.1h38.9c9 0 16.3-8.2 16.3-18.3 0-8.2-5-15.5-12.1-17.6l-62.3-18.7c-25.7-7.7-43.7-32.4-43.7-60.1.1-34 26.4-61.5 59.1-62.4zM480 352h-32.5c-19.6 26-44.6 47.7-73 64h63.8c5.3 0 9.6 3.6 9.6 8v16c0 4.4-4.3 8-9.6 8H73.6c-5.3 0-9.6-3.6-9.6-8v-16c0-4.4 4.3-8 9.6-8h63.8c-28.4-16.3-53.3-38-73-64H32c-17.7 0-32 14.3-32 32v96c0 17.7 14.3 32 32 32h448c17.7 0 32-14.3 32-32v-96c0-17.7-14.3-32-32-32z"></path></svg>','donate', 'Funding  is necessary to continue to move our mission forward. We thank you for your support!', 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=KBQX3PKN2PGFG', 'donate now'),
                2 => new Box('<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="calendar-alt" class="icon icon-sm" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm320-196c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM192 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM64 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z"></path></svg>','events', 'To be Announced!!!!! To be Announced!!!!! To be announced!!!!! To be Announced!!!!! To be Announced!!!!! To be Announced!!!!!', '#', 'events'),
                3 => new Box('<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="handshake" class="icon icon-sm" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M434.7 64h-85.9c-8 0-15.7 3-21.6 8.4l-98.3 90c-.1.1-.2.3-.3.4-16.6 15.6-16.3 40.5-2.1 56 12.7 13.9 39.4 17.6 56.1 2.7.1-.1.3-.1.4-.2l79.9-73.2c6.5-5.9 16.7-5.5 22.6 1 6 6.5 5.5 16.6-1 22.6l-26.1 23.9L504 313.8c2.9 2.4 5.5 5 7.9 7.7V128l-54.6-54.6c-5.9-6-14.1-9.4-22.6-9.4zM544 128.2v223.9c0 17.7 14.3 32 32 32h64V128.2h-96zm48 223.9c-8.8 0-16-7.2-16-16s7.2-16 16-16 16 7.2 16 16-7.2 16-16 16zM0 384h64c17.7 0 32-14.3 32-32V128.2H0V384zm48-63.9c8.8 0 16 7.2 16 16s-7.2 16-16 16-16-7.2-16-16c0-8.9 7.2-16 16-16zm435.9 18.6L334.6 217.5l-30 27.5c-29.7 27.1-75.2 24.5-101.7-4.4-26.9-29.4-24.8-74.9 4.4-101.7L289.1 64h-83.8c-8.5 0-16.6 3.4-22.6 9.4L128 128v223.9h18.3l90.5 81.9c27.4 22.3 67.7 18.1 90-9.3l.2-.2 17.9 15.5c15.9 13 39.4 10.5 52.3-5.4l31.4-38.6 5.4 4.4c13.7 11.1 33.9 9.1 45-4.7l9.5-11.7c11.2-13.8 9.1-33.9-4.6-45.1z"></path></svg>','partnership', 'We are always striving to touch more lives through partnership participation platforms or sponsorships.', '#', 'let\'s talk'),
                4 => new Box('<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shopping-bag" class="icon icon-sm" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M352 160v-32C352 57.42 294.579 0 224 0 153.42 0 96 57.42 96 128v32H0v272c0 44.183 35.817 80 80 80h288c44.183 0 80-35.817 80-80V160h-96zm-192-32c0-35.29 28.71-64 64-64s64 28.71 64 64v32H160v-32zm160 120c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24zm-192 0c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24z"></path></svg>','shop', 'coming soon', '#', 'shop now'),
                5 => new Box('<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="seedling" class="icon icon-sm" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M64 96H0c0 123.7 100.3 224 224 224v144c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V320C288 196.3 187.7 96 64 96zm384-64c-84.2 0-157.4 46.5-195.7 115.2 27.7 30.2 48.2 66.9 59 107.6C424 243.1 512 147.9 512 32h-64z"></path></svg>','giving 360', 'Out unique program to that allows us to  give back to you as you empower our mission.', '#', 'let\'s talk')
                );
            break;
        case 'emotional-intelligence':
            $PAGE_TITLE = 'what is emotional intelligence';
            $TITLE = 'what is emotional intelligence?';
            $INFO_TEXT = 'It is the capacity to be aware of, control, and express one’s emotions and to handle interpersonal relationships judiciously and empathetically.';
            $SUBTITLE = array('Self Awareness', 'Critical Thinking', 'Social Awareness', 'Self Regulation');
            $BRAIN_IMG = '../img/brain-white-yellow-grid.png';
            $BACKGROUND = '<div class="background"></div>';
            $CSS_PATH = '<link rel="stylesheet" href="../inc/css/background.css">';
            break;
        case 'our-team':
            $PAGE_TITLE = 'Our Team';
            $TITLE = 'our team';
            $INFO_TEXT = '';
            $CSS_PATH = '<link rel="stylesheet" href="../inc/css/background.css"><link href="./team.css" rel="stylesheet">';
            $BACKGROUND = '<div class="background"></div>';
            break;
        case 'board-of-directors':
            $PAGE_TITLE = 'Board of Directors';
            $TITLE = 'board of directors';
            $BACKGROUND = '<div class="background"></div>';
            $SUBTITLE = array('board of directors', 'advisory board');
            $CSS_PATH = '<link rel="stylesheet" href="../inc/css/background.css">';
            class Director {
                public function __construct($name, $title, $intro) {
                    $this->name = $name;
                    $this->title = $title;
                    $this->intro = $intro;
                    $this->val = 1;
                }
                public function person() {
                    $dop = '<div class="wht-bar director"  onclick="showIntro(this,\'director\')">';
                    $dop .= '<span class="director title hd4">'.$this->name.'</span>';
                    $dop .= '<span class="director subtitle text2">'.$this->title.'</span>';
                    $dop .= '<div id="Toggle" class="director intro text2">'.$this->intro.'</div>';
                    $dop .= '</div>';
                   echo $dop;
                }
            }

            $director = array(
                0 => new Director('Nina Linh','President','Founder, Chief Executive Officer and Executive Director at The WonderSeed
                Foundation'),
                1 => new Director('Mark Casanova','Treasurer','Executive Director at Homeless HealthCare Los Angeles'),
                2 => new Director('Jeremy Davey','Vice President','Entrepreneur, Investor, Start up Specialist and Chief Operation Officer at The
                WonderSeed Foundation'),
                3 => new Director('Prinses Hemphill','Secretary','Director at Celeb Events'),
                4 => new Director('John Canning', '','Executive Director at Digital Domain, Former Vice president of Interactive Experiences
                at NBC Universal'),
                5 => new Director('Jeffrey Plummber', 'Chairmen','Lead Regional Vice President at Guardian Insurance'),
                6 => new Director('Kyle Kane', '','Chief Strategy Officer at Beyond Pacific, Vice President of Artist and
                Repertoire at Universal Music')
            );

            class Advisory {
                public function __construct($name, $intro) {
                    $this->name = $name;
                    $this->intro = $intro;
                }

                public function advisory() {
                    $dop = '<div class="wht-bar advisor"  onclick="showIntro(this, \'director\')">';
                    $dop .= '<span class="advisory title hd4">'.$this->name.'</span>';
                    $dop .= '<div id="Toggle" class="advisory intro text2">'.$this->intro.'</div>';
                    $dop .= '</div>';
                   echo $dop;
                }
            }
            
            $advisory = [
                0 => new Advisory('Chris Christian', 'Managing Partner at WNBA Dallas Wings, Grammy award winning songwriter and producer'),
                1 => new Advisory('Taylor Weyeneth', 'Managing Director of 20k Strategies, Executive Director of End the Stigma PAC, Former Deputy Chief of Staff, Executive Office of the President-White House Drug Policy Office'),
                2 => new Advisory('Paul Miller', 'Manager at Logic 20/20, Former program officer at Bill and Melinda Gates Foundation, Former Senior Advisor and Program Policy Development Specialist for Los Angeles Unified School District'),
                3 => new Advisory('Congressman Mike Honda', 'U.S. House of Representatives, California 15th and 17th District'),
                4 => new Advisory('Peter Pang', 'Managing Partner at International Law firm IPO PANG XINGPU'),
                5 => new Advisory('Josiah Henson', 'Senior Partner at International law firm IPO PANG XUNGPU'),
                6 => new Advisory('Ralph Winnie', 'Vice President of The Eurasia Center, Partner at International law firm IPO Pang Xing Pu'),
                7 => new Advisory('Randall Moseley', 'Board of Director at Nadine N. Moseley Foundation'),
                8 => new Advisory('Jason Clark', 'Celebrity Photographer'),
                9 => new Advisory('Scott McNeely', 'Managing Partner at Dendera, Investment Banker at Jeffries & Co.'),
                10 => new Advisory('Dr. Timo Dietrich', 'Lecturer and Professor at Griffith University, Creator of Blurred Minds Alcohol Prevention pilot programE'),
                11 => new Advisory('Audra Lee', 'Former Executive Director of CASA, Riverside County, Former Program Director at Indian Child and Family Services'),
                12 => new Advisory('Manny Alicandro Esq', 'Former Executive Director and Assistant General Counsel for JP Morgan Chase, Former Vice President / Associate General Counsel for Nasdaq'),
                13 => new Advisory('Amir Rafizadeh', 'Principal at 678 Partners, Family Office Advisor'),
                14 => new Advisory('Eric Catalan', 'Principal at Accullent'),
                15 => new Advisory('Harry Karidis', 'Director, Producer at Karidis Productions'),
                16 => new Advisory('Sandeep Kumar', 'Managing Partner at Global Ascent Partners, Executive Director at DiscoverSTEAM Foundation'),
                17 => new Advisory('Jose Osuna', 'Chief Mission Officer, The Meaning Foundation, Probation Ov'),
                18 => new Advisory('Frank Jansen', 'Senior Vice President at Chicago Title')
            ];
            break;
        case 'who-we-are':
            $PAGE_TITLE = 'what we do';
            $TITLE = "WHO WE ARE";
            $INFO_TEXT = 'Our Mission is to teach and promote Emotional Intelligence through of Technology and the power of Storytelling.';
            $BACKGROUND = '<div class="background"></div>';
            $CSS_PATH = '<link rel="stylesheet" href="../inc/css/background.css">';
            break;
        case 'mission':
            $PAGE_TITLE = 'Our Mission';
            $TITLE = 'our mission';
            $INFO_TEXT = 'Our Mission is to teach and promote Emotional Intelligence through of Technology and Storytelling.';
            $BACKGROUND = '<div class="background"></div>';
            $CSS_PATH = '<link href="./css/circle-animation.css" rel="stylesheet"><link rel="stylesheet" href="../inc/css/background.css">';
            break;
        default: //index.php
            $PAGE_TITLE = 'Home';
            $TITLE = 'the wonderseed foundation';
            $INFO_TEXT = '“Children are our most valuable resource and its best hope for the future” &nbsp;&nbsp;&lt;i&gt;-John&nbsp;F.&nbsp;Kennedy&lt;/i&gt;';
            $BACKGROUND = '<div id="particles-js"></div>';
            $SECTION_BGIMG = ['./img/intelligence.jpg','./img/idea.jpg'];
            $CSS_PATH = '<link rel="stylesheet" href="./inc/css/particles.css">';
            $SUBTITLE = [
                ['WHAT IS EMOTIONAL INTELLIGENCE', '<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="question-circle" class="box-shadow am-brd-radius50" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#fff" d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path></svg>'],
                ['4E System', 'Our program is based on our socio-emotional']
            ];
            $SLIDER_BOX = [
                ['title'=>'The Power of Storytelling', 'text'=>'improve narrative recall and problem solving increase literacy and boost linguistic abilities facilitate abstract thinking develop self regulation and self awareness', 'url'=>'#', 'bgcolor'=>'017BC5'], ['title'=>'Technology', 'text'=>'We speak the language that our children understand through Virtual Reality and Gamification','#', 'bgcolor'=>'6ACA6B']
            ];

            class Box {
                public function __construct($icon, $title, $list, $width) {
                    $this->icon = $icon;
                    $this->title = $title;
                    $this->list = $list;
                    $this->width = $width;
                }

                public function makeBox() {
                    $dop = '<div class="box-column-wrapper brd-radius-8 wht-border" style="width:'.$this->width.';">';
                    $dop .= '<img src="'.$this->icon.'">';
                    $dop .= '<h3 class="title capitalize center">'.$this->title.'</h3>';
                    $dop .= '<ul style="list-style-type: initial !important;">';
                    foreach($this->list as $val) {
                        $dop .= '<li class="text-md capitalize" style="line-height: 1.5em;margin-left:25px;">'.$val.'</li>';
                    }
                    $dop .= '</ul></div>';
                    echo $dop;
                }
            }
            $intelligence = [
                new Box('', 'Self Awareness', ['Identifying ones emotions', 'Accurate Self- perception', 'Recognizing strengths and limitations', 'Self- confidence', 'elf-efficacy'], '230px'),
                new Box(null, null, null, null),
                new Box('', 'Self-Management', ['Impulse contro', 'Stress-management ', 'Self-discipline', 'Self-Motivation', 'Goal-setting', 'Organizational skills'], '230px'),
                new Box('', 'Social Awareness', ['Empathy', 'Respect for Others', 'Perspective taking', 'Appreciate diversity'], '230px'),
                new Box('', 'Relationship Skills', ['Communication and Active listening', 'Social Engagement', 'Relationship-building', 'Teamwork'], '230px'),
                new Box('', 'Responsible Decision-making', ['Identifying problems', 'Analyzing situations', 'Problem solving', 'Evaluating', 'Reflecting and mindfulness', 'Ethical responsibility'], '230px')
            ];
            $SYSTEM_4E = [
                ['EMPOWER', 'them with self awareness, self regulation and critical thinking', '2D6093'],
                ['ENGAGE', 'them with social technology, active listening and self motivation', '679868'],
                ['ENLIGHTEN', 'them with compassion, empathy and mindfulness', '2D6093'],
                ['EDUCATE', 'them with facts and social skills', '679868']
            ];
            
            $PARAGRAPH = [
                [
                    'title' => 'Our Drug Prevention Initiative',
                    'image' => './img/no-drugs-640.gif',
                    'text' => '<p>The Right Choice Campaign is a unique an interactive VR360 innovative drug prevention program to help kids learn how to make the Right Choices when faced with real life scenarios that may lead them to take drugs or drink alcohol to self-medicate or fit in.</p>
                    
                    <p>Our VR platform lets kids experience a simulated real time, live action, first person perspective on how making alternative choices can lead to lifelong consequences while making the Right Choices can empower you into success.</p>
                    
                    <p>With our program, kids are immersed in a multi-sensory experience and active learning situation intended to promote critical thinking and mindfulness. We use the evidence- based impact of storytelling and VR gamification education to make a lasting impression in the minds of our kids which will allow them to take the tools they learn today and use them to navigate difficult situations tomorrow.</p>',
                    'url'=>'#'
                ],
                [
                    'title'=>'Preventative Justice Initiative',
                    'image'=>'./img/doors-640.jpg',
                    'text'=>'Express Yourself Campaign</p>                    
                    <p>Express Your Self Campaign is our innovative Diversion program that is created to help teens and young adults avoid contact with the justice system through an app-based preventative program based on socio-emotional learning through gamification and a restorative justice curriculum.
                    
                    <p>The program is based on our 4 E system: Empower, Educate, Enlighten and Engage. It is designed to encourage participants to stay on the right track, teach them how to set goals and reward them for progress and success.</p>
                    
                    <p>Our curriculum is created on evidence-based Therapeutic modalities that promote accountability, self-awareness, critical thinking, empathy and mindfulness. Our solution is a departure from the outdated and failed Punitive modalities that have high rates of recidivism.</p>',
                    'url'=>'#'
                ]
            ];
            break;
    }
?>
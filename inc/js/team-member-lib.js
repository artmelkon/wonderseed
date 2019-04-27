// team members title, photo, bio

function Team (name, subtitle, bio, image) {
    this.name = name;
    this.subtitle = subtitle;
    this.bio = bio;
    this.image = image;
    this.output = () => {
      let txt = "";
      txt += `<div class="team-member container" onclick="showIntro(this,\'team\')">`;
      txt += `<div class="team-static"><img src="../img/team/${this.image}" class="team-image" />`;
      txt += `<div class="team title-box"><h4 class="title" style="font-weight: 400;">${this.name}</h4>`;
      txt += `<p class="text2">${this.subtitle}</p></div></div>`;
      txt += `<div class="team-intro-wrapper" id="Toggle"><div class="team intro text2">${this.bio}</div>`;
      txt += `<div class="torn-paper img"><img src="../img/torn-paper-sdw.png"></div></div></div>`;
      return txt;
    };
  }
    
    const team = [
      new Team('Nina Linh', 'Founder and Executive Director', 'Television producer veteran, writer and mother, Nina has a wealth of knowledge that spans over two decades. Adept at quality content creation and marketing, Nina was one of the youngest producers to co-produce the first highest-rated original shows on CMT along with the first original reality series for GSN. She has also published a parenting book along with a series of children’s books. <a href="mailto:nina@wonderseedfoundation.com">nina@wonderseedfoundation.com</a>', 'team1.png'),
      new Team('Jeremy Davey', 'Chief Operating Officer & Founding Board Member', 'Entrepreneur, investor, and startup specialist with 30+ years of experience in the fields of real estate development, eco-construction, material science, renewable energy, branding, and marketing. Since moving to the US in 1993, Jeremy has been CEO and Founder of five companies and consulted to several hundred more. Highlights include: building an award-winning digital ad agency; incubating 8 different technology companies; co-founding a renewable energy company (in its tenth year of operation); and establishing working relationships with housing developers and government agencies in 25 countries. He is a proud father of 4 children. <a href="mailto:JeremyD@wonderseedfoundation.com">JeremyD@WonderSeedFounadtion.com</a>', 'team2.png'),
      new Team('John D. Canning', 'Founding Board Member​', 'Recently Former VP of Interactive Experiences for NBC Entertainment Digital, where he developed native interactive experiences in 2nd screen, social media and virtual reality for shows including The Voice, Blacklist, America\'s Got Talent and Blindspot. Over a 20+ year career that has spanned the technology and process of creating and delivering media, games, and VR/AR experiences from concept to consumer. John has endeavored to help companies and causes not only tell their stories through dynamic media but also leverage disruptive and transformative technology to maximize the impact. He currently serves as the Chairman of the New Media Council for the Producers Guild of America representing the interests of producers of broadband video, games, transmedia, iTV and VR/AR content to the entertainment industry.', 'team3.png'),
      new Team('Dr. Timo Dietrich', 'Creator & Lecturer', 'Creator of the Blurred Minds Virtual Reality pilot program, Lecturer Department of Marketing, Griffith Business School, Griffith University Postdoctoral Research Fellow at Social Marketing @ Griffith & The University of Queensland Dr. Timo Dietrich holds a joint position with Griffith University and The University of Queensland as a Lecturer and Postdoctoral Research Fellow respectively. Timo is an expert in applying co-design to deliver programs that change behaviors for the better. He has published in 60 peer-reviewed books, journal papers, and conference papers. Timo’s social marketing projects use innovative technology solutions and gamification theory to foster positive behavior change. Timo works with a diverse range of industry partners including Alcocups, Queensland Catholic Education Commission, Bendigo Bank, Organ Tissue Authority, UNICEF and more. Globally recognized for his work, Timo has extensive experience in delivering insight research to inform program strategy, development and planning, large-scale process and outcomes evaluations and disseminating work more widely in scientific publications.', 'team4.png'),
      new Team('Kyle Kane', '', 'Kyle Kane is an award-winning entrepreneur, founding principal and CEO of 180 South Group, recently ranked byInc. as the #13 Fastest Growing Company, and #24 in Global Marketing and Advertising. Kyle has budgeted, coordinated, and executed strategic branding and positioning campaigns for clients such as Universal Music Group, Capitol Records, Samsung, Piaget, Montblanc, and others. Having developed dozens of Emmy-award winning entertainment properties for children and families, Kyle helps to oversee the multimodal marketing, production, and activation efforts of WonderSeed, as well as client relations amongst the world’s premier artists and brands.', 'team5.png')
    ];
  
    for (var value of team) {
      document.querySelector('.team-members').innerHTML += value.output();
    }
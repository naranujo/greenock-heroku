<?php
error_reporting(-1);
ini_set("display_errors", 1);

$template="default";
$lang = 'es';

if (isset($_GET['lang'])) {$lang = $_GET['lang'];}

$description = array(
    'es' => 'Conformamos un equipo de profesionales altamente capacitados en materia legal, fiscal y de auditoría fnanciera.', 
    'en' => 'We make up a team of highly trained professionals in matters of legal, fiscal and financial auditing.',
    'pt' => 'Formamos uma equipe de profissionais altamente treinados em questões legais, fiscais e de auditoria financeira.',
);

/*menu*/
$title0 = array(
    'es' => 'Inicio',
    'en' => 'Home',
    'pt' => 'Início',
);

$title1 = array(
    'es' => 'Nosotros',
    'en' => 'About us',
    'pt' => 'Sobre nós',
);

$title2 = array(
    'es' => 'Servicios',
    'en' => 'Services',
    'pt' => 'Serviços',
);

$title3 = array(
    'es' => 'Clientes',
    'en' => 'Clients',
    'pt' => 'Clientes',
);

$title4 = array(
    'es' => 'Contacto',
    'en' => 'Contact',
    'pt' => 'Contato',
);

$animleft  = ' data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="3000" ';
$animright = ' data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" ';

$slider = array(
    'es' => 'SOBRE NOSOTROS',
    'en' => 'ABOUT US',
    'pt' => 'SOBRE NÓS',
);

$slider_boton = array(
    'es' => 'SEGUIR LEYENDO',
    'en' => 'READ MORE',
    'pt' => 'LEIA MAIS',
);

$slide1_tit = array(
    'es' => 'Independencia: <br class="d-none d-md-block">comprometidos únicamente <br class="d-none d-md-block">con nuestros clientes',
    'en' => 'Independence: <br class="d-none d-md-block">we are entirely committed <br class="d-none d-md-block">to our clients.',
    'pt' => 'Independência: <br class="d-none d-md-block">totalmente comprometidos <br class="d-none d-md-block">com nossos clientes.',
);

$slide1_tex = array(
    'es' => 'Brindamos un asesoramiento objetivo, libre de restricciones, solo alineado con los intereses de quienes nos eligen.',
    'en' => 'We offer objective, unrestricted consulting, aligned solely with the interests of those who choose to engage us.',
    'pt' => 'Oferecemos consultoria objetiva e sem restrições, alinhada exclusivamente com os interesses daqueles que escolhem nos contratar.',
);

$slide2_tit = array(
    'es' => 'Enfoque global: <br class="d-none d-md-block">abordamos los desafíos <br class="d-none d-md-block">de la ingeniería patrimonial <br class="d-none d-md-block">de manera integrada ',
    'en' => 'Global focus: <br class="d-none d-md-block">we approach the challenges <br class="d-none d-md-block">of wealth engineering <br class="d-none d-md-block">in an integrated manner.',
    'pt' => 'Foco global: <br class="d-none d-md-block">abordamos os desafios <br class="d-none d-md-block">da engenharia patrimonial <br class="d-none d-md-block">de forma integrada.',
);

$slide2_tex = array(
    'es' => 'Ofrecemos soluciones que comprenden la planificación patrimonial, la planificación fiscal y la gestión y protección de activos.',
    'en' => 'We provide solutions that encompass wealth and fiscal planning, as well as the management and protection of assets.',
    'pt' => 'Oferecemos soluções que abrangem planejamento patrimonial, planejamento fiscal e gestão e proteção de ativos.',
);

$slide3_tit = array(
    'es' => 'Escala humana: <br class="d-none d-md-block">cercanía y franqueza <br class="d-none d-md-block">para gestar relaciones<br class="d-none d-md-block"> sólidas y duraderas',
    'en' => 'Human scale: <br class="d-none d-md-block">proximity and openness <br class="d-none d-md-block">to create solid and lasting <br class="d-none d-md-block">working relationships',
    'pt' => 'Escala humana: <br class="d-none d-md-block">proximidade e franqueza <br class="d-none d-md-block">para criar relacionamentos <br class="d-none d-md-block">sólidos e duradouros',
);

$slide3_tex = array(
    'es' => 'El trato personalizado y el conocimiento mutuo son esenciales para nutrir la confianza que sostiene nuestro negocio.',
    'en' => 'Personalized services and getting to know each other are paramount to nurture/the trust that upholds our business.',
    'pt' => 'Serviços personalizados e conhecer uns aos outros são fundamentais para nutrir a confiança que sustenta nosso negócio.',
);

$slide4_tit = array(
    'es' => 'Profesionalismo: formación <br class="d-none d-md-block">académica y capacitación <br class="d-none d-md-block">continua para brindar <br class="d-none d-md-block">soluciones de vanguardia',
    'en' => 'Professionalism: academic <br class="d-none d-md-block">background and continuous <br class="d-none d-md-block">training to deliver <br class="d-none d-md-block">avant-garde solutions',
    'pt' => 'Profissionalismo: formação <br class="d-none d-md-block">acadêmica e treinamento <br class="d-none d-md-block">contínuo para oferecer <br class="d-none d-md-block">soluções de ponta',
);

$slide4_tex = array(
    'es' => 'Un equipo de expertos altamente calificados, personalmente comprometidos con la transparencia y los estándares éticos más elevados.',
    'en' => 'A team of highly qualified experts, each committed to transparency and the highest ethical standards.',
    'pt' => 'Uma equipe de especialistas altamente qualificados, comprometidos pessoalmente com a transparência e os mais altos padrões éticos.',
);

$seccion1 = array(
    'es' => 'NOSOTROS',
    'en' => 'ABOUT US',
    'pt' => 'SOBRE NÓS',
);

$seccion1_tit = array(
    'es' => 'Un equipo apasionado, <br>una firma con alma',
    'en' => 'An impassioned team, <br>a firm with soul',
    'pt' => 'Uma equipe apaixonada, <br>uma empresa com alma',
);

$seccion1_tex1 = array(
    'es' => 'En Greenock somos profundamente conscientes de la delicada misión que implica resguardar los frutos de su esfuerzo para asegurar su trascendencia en el tiempo y su transmisión a las siguientes generaciones. Por eso trabajamos de manera rigurosa e incansable para honrar la confianza que implica ser elegidos para llevar adelante una tarea tan significativa.',
    'en' => 'At Greenock we are profoundly aware of the delicacy required by the mission of safeguarding the fruits of your labour in order to ensure its preservation and transmission to future generations. That is why we work meticulously and tirelessly to honor the trust that comes with being selected to carry out such a significant task.',
    'pt' => 'Na Greenock, estamos profundamente conscientes da delicada missão de proteger os frutos do seu trabalho para garantir sua transcendência ao longo do tempo e sua transmissão para as próximas gerações. Por isso, trabalhamos de forma rigorosa e incansável para honrar a confiança que vem com a escolha de realizar uma tarefa tão significativa.',
);

$seccion1_tex2 = array(
    'es' => 'Conformamos un equipo de profesionales altamente capacitados en materia legal, fiscal y de auditoría financiera, en el que convergen más de 100 años de experiencia combinada en planificación patrimonial, trayectorias reconocidas internacionalmente y el dinamismo y la frescura de una compañía joven e innovadora, cuya escala compacta propicia una gestión ágil y eficaz, con mínimos niveles de delegación y un compromiso total con la confidencialidad.',
    'en' => 'We make up a team of highly trained professionals in matters of legal, fiscal and financial auditing, with a combined 100 years of experience in wealth planning and international recognition. We also bring to the table the dynamism and vitality of a young and innovative firm, helped by our scale to achieve rapid and efficient management, with minimal delegating and a total commitment to confidentiality.',
    'pt' => 'Formamos uma equipe de profissionais altamente capacitados em questões legais, fiscais e auditoria financeira, com mais de 100 anos de experiência combinada em planejamento patrimonial e reconhecimento internacional. Também trazemos para a mesa o dinamismo e a vitalidade de uma empresa jovem e inovadora, ajudada pela nossa escala para alcançar uma gestão rápida e eficiente, com delegação mínima e um compromisso total com a confidencialidade.',
);

$seccion1_tex3 = array(
    'es' => 'Somos una firma boutique, cuyos máximos responsables participan activamente en la operación diaria y están personalmente involucrados en la relación que en Greenock mantenemos con cada uno de nuestros clientes y sus familias. Porque sus intereses constituyen nuestra mayor prioridad y son la referencia de una labor que realizamos con prudencia y transparencia, libre de todo tipo de condicionamiento externo gracias al carácter independiente de nuestra compañía.',
    'en' => 'We are a boutique firm where the top officers participate actively in the day-to-day operations and are personally involved in the relationships we at Greenock maintain with each and every client and their families. Because their interests are our top priority and referral point to a task we carry out with discretion and transparency, free of external conditioning factors, all of which is made possible by the independent nature of our company.',
    'pt' => 'Somos uma empresa boutique, onde os principais executivos participam ativamente das operações diárias e estão pessoalmente envolvidos nos relacionamentos que mantemos na Greenock com cada cliente e suas famílias. Porque seus interesses são nossa maior prioridade e ponto de referência para uma tarefa que realizamos com discrição e transparência, livre de condicionamentos externos, tudo isso é possível graças à natureza independente de nossa empresa.',
);

$seccion2 = array(
    'es' => 'METODOLOGÍA',
    'en' => 'METHODOLOGY',
    'pt' => 'METODOLOGIA',
);

$seccion2_tit = array(
    'es' => 'Conocernos para confiar, <br>confiar para creer',
    'en' => 'Getting to know us to trust, <br>trust to believe',
    'pt' => 'Conhecer-nos para confiar, <br>confiar para acreditar',
);

$seccion2_tex1 = array(
    'es' => 'En Greenock sabemos que el factor más determinante a la hora de constituir y asignar la administración de un fondo fiduciario es la confianza. Entendemos que inspirarla depende de nuestra conducta, tanto corporativa como personal, y que cultivarla es una tarea que requiere minuciosidad y constancia. Por eso nos dedicamos a brindar una atención personalizada, caracterizada por la comunicación fluida, la disponibilidad inmediata y el diálogo sincero con cada cliente y su entorno familiar.',
    'en' => 'At Greenock we know that trust is the decisive factor when it comes to establishing and assigning the management of a trust fund. We understand that inspiring that trust depends on our conduct, both personal and corporate, and that cultivating trust is an endeavor that requires thoroughness and steadiness. For this reason, we are dedicated to offering customized services, marked by smooth communication, immediate accessibility, and forthright conversations with each client and their family.',
    'pt' => 'Na Greenock, sabemos que a confiança é o fator decisivo na hora de estabelecer e atribuir a gestão de um fundo fiduciário. Entendemos que inspirar essa confiança depende de nossa conduta, tanto pessoal quanto corporativa, e que cultivar a confiança é uma tarefa que requer minúcia e constância. Por isso, estamos dedicados a oferecer serviços personalizados, marcados por uma comunicação fluida, acessibilidade imediata e conversas francas com cada cliente e sua família.',
);

$seccion2_tex2 = array(
    'es' => 'La relación próxima y franca que establecemos con quienes nos eligen nos posibilita indagar en sus deseos, identificar sus inquietudes e interpretar sus expectativas. De esa manera, podemos dar respuestas específicas y a la medida de cada familia a partir de meticulosos análisis y evaluaciones. Porque nuestra escala y el nivel de eficiencia de nuestros procesos nos permiten prescindir de las soluciones estandarizadas en el desarrollo y la gestión de estrategias fiduciarias.',
    'en' => 'The close and sincere rapport we establish with everyone that chooses to engage our services allows us to explore their wishes, identify their concerns and interpret their expectations. In this way, we can provide specific and customized solutions through meticulous assessments and evaluations. Due to our scale and level of efficiency of our process, we can dispense with standardized solutions when addressing the development and managing of fiduciary strategies.',
    'pt' => 'O relacionamento próximo e sincero que estabelecemos com aqueles que nos escolhem nos permite explorar seus desejos, identificar suas preocupações e interpretar suas expectativas. Dessa forma, podemos fornecer soluções específicas e personalizadas por meio de avaliações meticulosas. Devido à nossa escala e nível de eficiência de nosso processo, podemos dispensar soluções padronizadas ao abordar o desenvolvimento e a gestão de estratégias fiduciárias.',
);

$seccion2_tex3 = array(
    'es' => 'Nuestro liderazgo se basa en la formación académica de nuestros profesionales, en nuestra solvencia en la emisión de reportes, en el dinamismo de nuestros controles internos y en un exhaustivo monitoreo de activos y actividades dentro de cada fideicomiso. Son los procesos que dan cuenta de la responsabilidad y el profesionalismo con los que llevamos adelante el resguardo de los patrimonios que nos son confiados.',
    'en' => 'Our leadership is based on the academic qualifications of our professionals, on the dependability of the reports we issue, on the dynamism of our internal controls, and on the exhaustive monitoring of assets and activities within each trust. These are the processes that attest to the responsibility and professionalism with which we conduct the safeguarding of all assets we are entrusted.',
    'pt' => 'Nossa liderança é baseada na formação acadêmica de nossos profissionais, na confiabilidade dos relatórios que emitimos, na dinâmica de nossos controles internos e no monitoramento exaustivo de ativos e atividades dentro de cada fideicomisso. Esses são os processos que atestam a responsabilidade e o profissionalismo com os quais conduzimos a proteção de todos os ativos que nos são confiados.',
);

$seccion3 = array(
    'es' => 'CLIENTES',
    'en' => 'CLIENTS',
    'pt' => 'CLIENTES',
);

$seccion3_tit = array(
    'es' => 'Tradición, valores e identidad,<br>el patrimonio más preciado',
    'en' => 'Tradition, values and identity, <br>the most treasured assets',
    'pt' => 'Tradição, valores e identidade, <br>o patrimônio mais precioso',
);

$seccion3_tex1 = array(
    'es' => 'Los servicios fiduciarios que ofrece Greenock están destinados a individuos y familias de alto patrimonio. Se trata de un círculo de clientes tan selectos como exigentes, habituados a obtener prestaciones de excelencia y un trato único. Por eso buscamos forjar con cada uno de ellos y sus familias un vínculo en el que confluyen tanto profesionalismo y calidez, como integridad y la más absoluta discreción.',
    'en' => 'The fiduciary services Greenock provides are aimed at high-net-worth individuals and families. They make up a group of select and demanding clients, accustomed to obtaining excelling performances and tailored solutions. For this reason, we set out to forge a strong bond with each client and their family, combining professionalism and warmth, as well as integrity and complete discretion.',
    'pt' => 'Os serviços fiduciários oferecidos pela Greenock são destinados a indivíduos e famílias de alto patrimônio. Eles compõem um grupo de clientes selecionados e exigentes, acostumados a obter desempenho excelente e soluções personalizadas. Por esse motivo, buscamos estabelecer um vínculo forte com cada cliente e sua família, combinando profissionalismo e cordialidade, assim como integridade e total discrição.',
);

$seccion3_tex2 = array(
    'es' => 'Quienes requieren nuestro asesoramiento se destacan por ser conscientes de su legado y haber asumido con una profunda generosidad y visión de largo plazo la responsabilidad de planificar el destino y la evolución de su patrimonio para asegurar el bienestar de sus herederos.',
    'en' => 'Those who choose to request our services are usually conscious of their legacy and have taken on that responsibility with generosity and long-term vision to plan the future and evolution of their assets in order to secure the well-being of the subsequent generations.',
    'pt' => 'Aqueles que escolhem solicitar nossos serviços geralmente estão conscientes de seu legado e assumiram essa responsabilidade com generosidade e visão de longo prazo para planejar o futuro e a evolução de seus ativos, a fim de garantir o bem-estar das gerações subsequentes.',
);

$seccion3_tex3 = array(
    'es' => 'Gracias a nuestra vasta experiencia en ingeniería patrimonial y a nuestra capacitación continua, contamos con la sensibilidad, la sagacidad y el conocimiento necesarios para asignar a cada patrimonio el orden y la estructura que mejor se adapte a los objetivos y las aspiraciones de cada individuo y familia. Y una vez que el plan elaborado está en marcha, permanecemos junto a nuestros clientes para ayudarlos en la toma de decisiones —de las más importantes y complejas a las más pequeñas— y, como mediadores entre generaciones, estimulamos el compromiso de los más jóvenes para con la tradición y el legado familiar.',
    'en' => 'Due to our vast experience in the field of wealth engineering and our continuous training program, we possess the sensibility, acumen and knowledge needed to provide the order and structuring each wealth demands to better adapt to the goals and aspirations of each individual and family. Once that plan has been set in motion, we stand by our clients to assist them in the decision-making process—from the most complex and important to the smallest of issues—and we function as mediators between the generations, while encouraging the younger members to commit to the family traditions and legacy.',
    'pt' => 'Devido à nossa vasta experiência no campo da engenharia patrimonial e ao nosso programa de treinamento contínuo, possuímos a sensibilidade, perspicácia e conhecimento necessários para fornecer a ordem e a estrutura que cada patrimônio exige para se adaptar melhor aos objetivos e aspirações de cada indivíduo e família. Uma vez que esse plano foi colocado em prática, estamos ao lado de nossos clientes para ajudá-los no processo de tomada de decisão - desde as mais complexas e importantes até as menores questões - e atuamos como mediadores entre as gerações, incentivando os membros mais jovens a se comprometerem com as tradições e o legado familiar.',
);

$seccion4 = array(
    'es' => 'TRUST',
    'en' => 'TRUST',
    'pt' => 'TRUST',
);

$seccion4_tit = array(
    'es' => 'Un instrumento que es historia, <br>y también futuro',
    'en' => 'An instrument of the past <br>as much as of the future',
    'pt' => 'Um instrumento do passado <br>tanto quanto do futuro',
);

$seccion4_tex1 = array(
    'es' => 'Un trust es un negocio jurídico privado que consiste en la transmisión de bienes o derechos de una persona (el constituyente) a otra (el fiduciario) para que esta los administre en nombre de la primera y en beneficio de un tercero o terceros (los beneficiarios).',
    'en' => 'A trust is a private legal business that allows the transfer of assets or rights of a party (the trustor) to another party (the trustee) to hold and direct said assets on their behalf for the benefit of a third party (the beneficiary or beneficiaries).',
    'pt' => 'Um trust é um negócio jurídico privado que consiste na transferência de bens ou direitos de uma pessoa (o constituinte) para outra (o fiduciário) para que este administre em nome do primeiro e em benefício de um terceiro ou terceiros (os beneficiários).',
);

$seccion4_tex2 = array(
    'es' => 'Los orígenes de este instrumento —de raíz anglosajona— se remontan a las cruzadas. En esa época, los señores feudales se lanzaban a una guerra muy lejana y su regreso era definitivamente muy incierto. Por eso, con una actitud previsora, muchos de ellos entregaban su patrimonio a una persona de su máxima confianza para de esa manera garantizar el futuro de sus allegados.',
    'en' => 'The origins of this instrument—of Anglo-Saxon roots—date back to the Crusades. In those days, the feudal lords left to fight a war far away and their return was decidedly uncertain. That is why, with a proactive attitude, many of them put their wealth in the hands of a person of their utmost trust to secure the future of their kin.',
    'pt' => 'As origens desse instrumento - de raízes anglo-saxônicas - remontam às Cruzadas. Naquela época, os senhores feudais partiam para uma guerra distante e seu retorno era definitivamente incerto. Por isso, com uma atitude proativa, muitos deles entregavam sua riqueza nas mãos de uma pessoa de sua máxima confiança para garantir o futuro de seus familiares.',
);

$seccion4_tex3 = array(
    'es' => 'Un milenio más tarde, este recurso ha evolucionado y ha sido dotado de rigurosos marcos legales en diversas jurisdicciones alrededor del mundo. Y, al igual que en la Edad Media, sigue siendo una valiosa herramienta para anticiparse a cualquier eventualidad, acotar la incertidumbre y asegurar un horizonte para nuestros seres más queridos.',
    'en' => 'A millennium later, this vehicle has evolved and received strict legal frameworks in different jurisdictions around the world. And, much like in the Middle Ages, it still proves to be a useful resource to anticipate any eventuality, reduce uncertainty and safeguard the future of our loved ones.',
    'pt' => 'Milênios depois, esse instrumento evoluiu e recebeu estruturas legais rigorosas em diferentes jurisdições ao redor do mundo. E, assim como na Idade Média, ainda se mostra um recurso útil para antecipar qualquer eventualidade, reduzir a incerteza e garantir o futuro de nossos entes queridos.',
);

$seccion5 = array(
    'es' => 'SERVICIOS',
    'en' => 'SERVICES',
    'pt' => 'SERVIÇOS',
);

$seccion5_tit = array(
    'es' => 'Soluciones de excelencia, <br>sustentadas en nuestro liderazgo <br>y en nuestra experiencia',
    'en' => 'World-class solutions, sustained by our leadership skills and experience',
    'pt' => 'Soluções de excelência, sustentadas em nossa liderança e experiência',
);

$seccion5_item1 = array(
    'es' => 'PLANIFICACIÓN',
    'en' => 'PLANNING',
    'pt' => 'PLANEJAMENTO',
);

$seccion5_item1_txt1 = array(
    'es' => 'Acompañamos a nuestros clientes con su planificación patrimonial, sucesoria y en la protección de sus activos',
    'en' => 'We accompany our clients in their wealth planning, succession planning, and asset protection',
    'pt' => 'Acompanhamos nossos clientes no planejamento de patrimônio, planejamento sucessório e proteção de ativos',
);

$seccion5_item2 = array(
    'es' => 'SERVICIOS FIDUCIARIOS',
    'en' => 'FIDUCIARY SERVICES',
    'pt' => 'SERVIÇOS FIDUCIÁRIOS',
);

$seccion5_item2_txt1 = array(
    'es' => 'Incorporación de Trust en diversas jurisdicciones internacionales',
    'en' => 'Incorporation of Trust in various international jurisdictions',
    'pt' => 'Incorporação de Trust em várias jurisdições internacionais',
);
$seccion5_item2_txt2 = array(
    'es' => 'Actuamos como Trustee',
    'en' => 'We act as Trustee',
    'pt' => 'Atuamos como Trustee',
);
$seccion5_item2_txt3 = array(
    'es' => 'Administración de los Trusts',
    'en' => 'Administration of Trusts',
    'pt' => 'Administração dos Trusts',
);
$seccion5_item2_txt4 = array(
    'es' => 'Monitereo de los Trust Funds',
    'en' => 'Monitoring of Trust Funds',
    'pt' => 'Monitoramento dos Trust Funds',
);

$seccion5_item3 = array(
    'es' => 'ADMINISTRACIÓN DE ACTIVOS COMPLEJOS',
    'en' => 'COMPLEX ASSET MANAGEMENT',
    'pt' => 'ADMINISTRAÇÃO DE ATIVOS COMPLEXOS',
);

$seccion5_item3_txt1 = array(
    'es' => 'Proveemos servicios de gestión de fondos familiares, inmuebles y obras de arte',
    'en' => 'We provide services for the management of family funds, real estate, and artworks',
    'pt' => 'Oferecemos serviços de gestão de fundos familiares, imóveis e obras de arte',
);

$seccion5_item3_txt2 = array(
    'es' => 'Control de la gobernabilidad de los negocios familiares',
    'en' => 'Control of family business governance',
    'pt' => 'Controle da governança dos negócios familiares',
);

$seccion5_item3_txt3 = array(
    'es' => 'Proveemos servicios calificados de custodia de activos digitales, como criptomonedas y valores digitales',
    'en' => 'We provide qualified custody services for digital assets, such as cryptocurrencies and digital securities',
    'pt' => 'Fornecemos serviços qualificados de custódia de ativos digitais, como criptomoedas e valores digitais',
);

$seccion5_item4 = array(
    'es' => 'SERVICIOS DE FAMILY OFFICE',
    'en' => 'FAMILY OFFICE SERVICES',
    'pt' => 'SERVIÇOS DE FAMILY OFFICE',
);

$seccion5_item4_txt1 = array(
    'es' => 'Ofrecemos servicios de asesoramiento para la estructuración de un family office y gestión de patrimonios familiares',
    'en' => 'We offer advisory services for the structuring of a family office and management of family wealth',
    'pt' => 'Oferecemos serviços de consultoria para a estruturação de um family office e gestão do patrimônio familiar',
);

$seccion5_item5 = array(
    'es' => 'FONDOS PRIVADOS',
    'en' => 'PRIVATE FUNDS',
    'pt' => 'FUNDOS PRIVADOS',
);

$seccion5_item5_txt1 = array(
    'es' => 'Constituimos fondos privados, proveemos su administración y prestamos servicios de cumplimiento',
    'en' => 'We establish private funds, provide their administration, and offer compliance services',
    'pt' => 'Constituímos fundos privados, fornecemos sua administração e oferecemos serviços de conformidade',
);

$seccion5_item5_txt2 = array(
    'es' => 'Calculo de NAV (Net Asset Value)',
    'en' => 'Calculation of NAV (Net Asset Value)',
    'pt' => 'Cálculo do NAV (Valor Líquido do Ativo)',
);

$seccion5_item6 = array(
    'es' => 'ÉTICA Y CUMPLIMIENTO',
    'en' => 'ETHICS AND COMPLIANCE',
    'pt' => 'ÉTICA E CONFORMIDADE',
);

$seccion5_item6_txt1 = array(
    'es' => 'Preparación de reportes y clasificación conforme normas de CRS, FATCA & CTA',
    'en' => 'Preparation of reports and classification according to CRS, FATCA & CTA regulations',
    'pt' => 'Preparação de relatórios e classificação de acordo com as regulamentações CRS, FATCA & CTA',
);
$seccion5_item6_txt2 = array(
    'es' => 'Confección de reportes de Erosión de la base imponible y traslado de beneficios (BEPS)',
    'en' => 'Preparation of reports on Base Erosion and Profit Shifting (BEPS)',
    'pt' => 'Preparação de relatórios sobre Erosão da Base Tributável e Transferência de Lucros (BEPS)',
);
$seccion5_item6_txt3 = array(
    'es' => 'Preparación y presentación de reportes de sustancia económica de acuerdo a la normativa de cada jurisdicción',
    'en' => 'Preparation and submission of reports on economic substance in accordance with the regulations of each jurisdiction',
    'pt' => 'Preparação e apresentação de relatórios sobre substância econômica de acordo com as regulamentações de cada jurisdição',
);

$seccion5_item7 = array(
    'es' => 'TERCERIZACIÓN DE SERVICIOS',
    'en' => 'OUTSOURCING SERVICES',
    'pt' => 'TERCEIRIZAÇÃO DE SERVIÇOS',
);

$seccion5_item7_txt1 = array(
    'es' => 'Preparación de estados contables',
    'en' => 'Preparation of financial statements',
    'pt' => 'Preparação de demonstrações financeiras',
);

$seccion5_item7_txt2 = array(
    'es' => 'Elaboración de reportes periodicos de gestión financiera para familias y negocios',
    'en' => 'Preparation of periodic financial management reports for families and businesses',
    'pt' => 'Preparação de relatórios periódicos de gestão financeira para famílias e negócios',
);

$seccion5_item7_txt3 = array(
    'es' => 'Liquidación de sueldos',
    'en' => 'Payroll processing',
    'pt' => 'Processamento de folha de pagamento',
);

$seccion5_item7_txt4 = array(
    'es' => 'Confección y presentación de reportes impositivos ante autoridades fiscales',
    'en' => 'Preparation and submission of tax reports to tax authorities',
    'pt' => 'Preparação e apresentação de relatórios fiscais às autoridades fiscais',
);

$seccion5_item8 = array(
    'es' => 'SERVICIOS EN URUGUAY',
    'en' => 'SERVICES IN URUGUAY',
    'pt' => 'SERVIÇOS NO URUGUAY',
);

$seccion5_item8_txt1 = array(
    'es' => 'Brindamos asesoramiento y gestionamos residencias fiscales y legales',
    'en' => 'We provide advice and manage tax and legal residencies',
    'pt' => 'Fornecemos consultoria e gerenciamos residências fiscais e legais',
);

$seccion5_item8_txt2 = array(
    'es' => 'Establecimiento de compañías en la Zona Franca',
    'en' => 'Establishment of companies in the Free Trade Zone',
    'pt' => 'Estabelecimento de empresas na Zona Franca',
);

$seccion6 = array(
    'es' => 'EN EL MUNDO',
    'en' => 'WORLDWIDE',
    'pt' => 'NO MUNDO',
);

$seccion6_tit = array(
    'es' => 'Presencia global, para responder a las exigencias de un mundo interconectado',
    'en' => 'Global presence, to answer to the demands of an interconnected world',
    'pt' => 'Presença global, para atender às demandas de um mundo interconectado',
);

$seccion7 = array(
    'es' => 'CONTACTO',
    'en' => 'CONTACT',
    'pt' => 'CONTATO',
);

$seccion7_tit = array(
    'es' => 'Contactanos',
    'en' => 'Contact us',
    'pt' => 'Entre em contato',
);

$seccion7_tex1 = array(
    'es' => 'PARAGUAY 2141, TORRE 3, PISO 1, OFICINA 001,',
    'en' => 'PARAGUAY 2141, TORRE 3, PISO 1, OFICINA 001,',
    'pt' => 'PARAGUAY 2141, TORRE 3, PISO 1, OFICINA 001,',
);

$seccion7_tex2 = array(
    'es' => '(ZONA FRANCA) AGUADA PARK (CP 11.800)',
    'en' => '(ZONA FRANCA) AGUADA PARK (CP 11.800)',
    'pt' => '(ZONA FRANCA) AGUADA PARK (CP 11.800)',
);

$seccion7_tex3 = array(
    'es' => '18 DE JULIO 841, OFICINA 401, (CP 11.100)',
    'en' => '18 DE JULIO 841, OFICINA 401, (CP 11.100)',
    'pt' => '18 DE JULIO 841, OFICINA 401, (CP 11.100)',
);

$seccion7_tex4 = array(
    'es' => 'MONTEVIDEO URUGUAY',
    'en' => 'MONTEVIDEO URUGUAY',
    'pt' => 'MONTEVIDEO URUGUAY',
);

$seccion7_tex5 = array(
    'es' => '+598 2909 2121',
    'en' => '+598 2909 2121',
    'pt' => '+598 2909 2121',
);

$seccion7_tex6 = array(
    'es' => 'info@greenocktrustcompany.com',
    'en' => 'info@greenocktrustcompany.com',
    'pt' => 'info@greenocktrustcompany.com',
);

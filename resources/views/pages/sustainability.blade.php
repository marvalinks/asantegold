@extends('layouts.app')

@section('styles')
    <style>
        .tabs.-type-3 .tabs__button{
            font-size: 12px;
        }
        .yt .col-auto {
            width: 20%;
        }
        .tabs__pane{
            width: 90%;
            margin: auto;
        }
        .mj img{
            width: 50%;
        }
        .mj{
            justify-content: center;
            align-items: center;
            align-content: center;
            justify-items: center;
            display: flex;
            margin-top: 30px;
            margin-bottom: 30px;
        }

        @media (max-width: 767px) {
            .yt .col-auto {
                width: 50%;
            }
            .tabs.-type-3 .tabs__controls{
                flex-wrap: wrap;
            }
        }
    </style>
@endsection

@section('content')
<section data-anim-wrap="" class="pageHeader -type-1 animated">
  <div data-anim-child="fade delay-1" class="pageHeader__image is-in-view">
    <img src="/assets/images/backgrounds/bg06.jpg" alt="image">
  </div>

  <div class="container">
    <h1 data-anim-child="slide-up delay-1" class="pageHeader__title is-in-view">Sustainability</h1>
  </div>
</section>
<section>
  {{-- <div class="row gl-2" style="justify-content: end;">
      <a href="#" class="button -md -dark-1 bg-accent-1 text-white col-4 bg-wht"></a>
      <a href="#" class="button -md -dark-1 bg-accent-1 text-white col-4 bg-wht"></a>
      <a href="https://drive.google.com/file/d/1JeLt6Vg2uXUX3Z2IVjIbQrVqbxx3vtLR/view?usp=drive_link" target="_blank" class="button -md -dark-1 bg-accent-1 text-white col-md-4 col-xs-12">Download Bibiani Technical Report</a>
  </div> --}}
</section>

<section class="layout-pt-lg pj">
  <div class="container">
    {{--  --}}
    <div class="tabs -type-3 js-tabs">
      <div class="row tabs__controls row x-gap-10 -mobileScroll js-tabs-controls yt">
          <div class="col-md-2 col-xs-6">
              <button class="tabs__button js-tabs-button -md -dark-1 bg-accent-1 text-white col-2 is-tab-el-active" data-tab-target=".-tab-item-1">
                Overview
              </button>
          </div>
  
          <div class="col-md-2 col-xs-6">
              <button class="tabs__button js-tabs-button -md -dark-1 bg-accent-1 text-white col-2" data-tab-target=".-tab-item-2">
                People
              </button>
          </div>
  
          <div class="col-md-2 col-xs-6">
              <button class="tabs__button js-tabs-button -md -dark-1 bg-accent-1 text-white col-2" data-tab-target=".-tab-item-3">
                Governance
              </button>
          </div>
          <div class="col-md-2 col-xs-6">
              <button class="tabs__button js-tabs-button -md -dark-1 bg-accent-1 text-white col-2" data-tab-target=".-tab-item-4">
                Environment
              </button>
          </div>
          <div class="col-md-3 col-xs-6">
              <button class="tabs__button js-tabs-button -md -dark-1 bg-accent-1 text-white col-2" data-tab-target=".-tab-item-5">
                Innovation and technology
              </button>
          </div>
      </div>
  
      <div class="tabs__content js-tabs-content">
          <div class="tabs__pane -tab-item-1 is-tab-el-active">
              <h2 class="text-accent-1">Sustainability Model: Overview for Asante Gold Corporation</h2>
              <div class="row">
                <div class="col-md-12">
                    <p>
                        Asante is committed to conducting its business operations in a socially responsible and environmentally 
                        sustainable manner. Recognizing the importance of sustainability in the modern business landscape, Asante 
                        aims to integrate environmental, social, and governance (ESG) principles into its core business strategies. 
                        This overview outlines Asante's approach to sustainability, highlighting key initiatives and practices aimed at 
                        fostering long-term value creation while minimizing negative impacts on the environment and society.
                      </p>
                </div>
                <div class="col-md-12">
                    <div class="mj">
                        <img src="https://tt3.ams3.digitaloceanspaces.com/asante-gold/Asante%20models.png" alt="">
                    </div>
                </div>
              </div>
              
              <br>
              <h2 class="text-accent-1">Our Values</h2> <br>
              <h4>Teamwork & Performance:</h4>
              <p>
                Teamwork: Asante Gold values collaboration and recognizes the importance of working together towards common goals. 
                The company fosters a culture where employees support and rely on one another, leveraging their diverse skills and 
                expertise to achieve collective success. By encouraging teamwork, Asante Gold promotes innovation, problem-solving, 
                and synergy among its workforces
              </p>
              <p>
                Performance: Asante Gold is committed to delivering excellence in performance across all aspects of its business operations. 
                The company sets high standards for performance and holds itself accountable for achieving results. Through continuous improvement 
                initiatives, goal setting, and performance tracking, Asante Gold strives to optimize efficiency, productivity, and operational 
                effectiveness. By focusing on performance, Asante Gold ensures the success and sustainability of its business in the competitive mining industry.
              </p>
              <br>
              <h4>Integrity & Accountability:</h4>
              <p>
                Integrity: Asante Gold upholds the highest standards of integrity, honesty, and ethical conduct in all its business dealings. The company operates 
                with transparency, fairness, and integrity, adhering to principles of honesty, fairness, and respect in its interactions with employees, stakeholders, 
                and the community. By demonstrating integrity in its actions and decisions, Asante Gold builds trust and credibility with its stakeholders and maintains 
                its reputation as a responsible corporate citizen.
              </p>
              <p>
                Accountability: Asante Gold believes in taking ownership of its actions and decisions and being accountable for their outcomes. The company holds itself 
                accountable to its stakeholders, including shareholders, employees, customers, and the community, by transparently reporting on its performance and progress 
                towards its goals. By promoting a culture of accountability, Asante Gold ensures that its employees take responsibility for their actions, learn from mistakes, 
                and strive for continuous improvement.
              </p>
              <br>
              <h4>Care & Respect:</h4>
              <p>
                Care: Asante Gold demonstrates care for its employees, stakeholders, and the environment by prioritizing their well-being and safety. The company invests in programs and 
                initiatives that promote health, safety, and well-being, ensuring that employees feel valued, supported, and empowered to thrive. Additionally, Asante Gold demonstrates care 
                for the environment by implementing sustainable practices and minimizing its environmental footprint in its operations.
              </p>
              <p>
                Respect: Asante Gold treats all individuals with respect, dignity, and fairness, regardless of their background, beliefs, or position. The company values diversity and inclusion, 
                recognizing the unique contributions and perspectives of everyone. By fostering a culture of respect, Asante Gold creates a positive work environment where all employees feel valued, 
                empowered, and motivated to do their best. Additionally, Asante Gold respects the communities and countries where it operates, engaging with stakeholders in a respectful and inclusive 
                manner and honoring their rights, customs, and cultures.
              </p>
              <br>
              <h2>Asante Gold Business Strategy: People, Performance, and Growth</h2>
              <br>
              <h4>People:</h4>
              <ul>
                <li>
                    <strong>Putting people first:</strong> Asante prioritizes the well-being and development of its people above all else. The company understands that its success is directly linked to the skills, 
                    dedication, and satisfaction of its workforce. By fostering a culture where employees feel valued, respected, and supported, Asante creates a positive work environment conducive to productivity and innovation.
                </li>
                <li>
                   <strong> Maintaining a competent and engaged workforce:</strong> Asante is committed to attracting, retaining, and developing top talent. The company invests in recruiting individuals with the right skills and experience 
                   to drive its business forward. Through comprehensive training, professional development opportunities, and performance recognition programs, Asante ensures that its workforce remains engaged, motivated, and equipped to 
                   meet the evolving needs of the business.
                </li>
                <li>
                    <strong>Continuously improving productivity and operational efficiency:</strong> Asante strives for excellence in productivity and operational efficiency across its operations. The company invests in technologies, processes, 
                    and systems to streamline workflows, eliminate waste, and optimize resource utilization. By empowering employees to identify and implement continuous improvement initiatives, Asante enhances productivity, reduces costs, and 
                    maintains a competitive edge in the market.
                </li>
                <li>
                    <strong>Making beneficial and sustainable contributions to our host communities and countries:</strong> Asante is committed to being a responsible corporate citizen and making positive contributions to the communities and countries 
                    where it operates. The company engages with local stakeholders to understand their needs and priorities and implements sustainable development initiatives that create shared value. By investing in community development projects, 
                    promoting local employment, and respecting local customs and cultures, Asante strives to build long-term relationships based on trust, respect, and mutual benefit.
                </li>
              </ul>
              
          </div>
  
          <div class="tabs__pane -tab-item-2">
            <h2 class="text-accent-1">People</h2>
            <p>
                Asante prioritizes the well-being and development of its people, including employees, local communities, and stakeholders.
            </p>
            <ul>
                <li>
                    <strong>Community Engagement and Development:</strong> Asante actively engages with local communities to understand their needs and 
                    aspirations. The company invests in community development projects focused on education, healthcare, infrastructure, and economic empowerment. 
                    By collaborating with community leaders and stakeholders, Asante fosters long-term relationships built on trust and mutual respect.
                </li>
                <li>
                    <strong>Health and Safety:</strong> The health and safety of its employees and surrounding communities are paramount to Asante. The company 
                    maintains rigorous safety protocols and provides comprehensive training to ensure a safe working environment. Additionally, Asante supports 
                    local healthcare initiatives to improve access to healthcare services for employees and community members.
                </li>
                <li>
                    <strong>Diversity and Inclusion:</strong> Asante values diversity and promotes an inclusive work environment where all individuals are respected 
                    and valued. The company encourages diversity in its workforce and seeks to create opportunities for underrepresented groups. By fostering a culture 
                    of inclusivity, Asante harnesses the unique talents and perspectives of its diverse workforce to drive innovation and business success.
                </li>
            </ul>
            

          </div>

          <div class="tabs__pane -tab-item-3">
            <h2 class="text-accent-1">Governance</h2>
            <p>
                Asante upholds high standards of corporate governance, transparency, and ethical conduct in all its business practices.
            </p>
            <ul>
                <li>
                    <strong>Transparent Reporting:</strong> Asante provides regular updates on its sustainability performance through comprehensive reporting 
                    mechanisms, including annual sustainability reports and disclosures in accordance with international standards. The company strives to maintain 
                    transparency and accountability in its operations, ensuring stakeholders have access to reliable information to make informed decisions.
                </li>
                <li>
                    <strong>Ethical Business Conduct:</strong> Asante operates with integrity, honesty, and fairness, and prohibits bribery, corruption, and unethical 
                    behavior. The company adheres to a Code of Conduct that outlines clear guidelines for ethical business conduct, and employees undergo regular ethics 
                    training to ensure compliance. By upholding ethical standards, Asante builds trust with stakeholders and strengthens its reputation as a responsible 
                    corporate citizen.
                </li>
                <li>
                    <strong>Stakeholder Engagement:</strong> Asante actively engages with its stakeholders, including investors, regulators, employees, and local communities, 
                    to understand their perspectives and address their concerns. The company maintains open channels of communication to foster dialogue, resolve conflicts, and 
                    build collaborative relationships. By listening to and considering the interests of its stakeholders, Asante ensures alignment with its sustainability goals and values.
                </li>
            </ul>
            

          </div>

          <div class="tabs__pane -tab-item-4">
            <h2 class="text-accent-1">Environment</h2>
            <p>
                Asante is committed to minimizing its environmental footprint and promoting biodiversity conservation in all its operations.
            </p>
            <ul>
                <li>
                    <strong>Responsible Mining Practices:</strong> Asante adheres to strict environmental standards and regulations to minimize the 
                    environmental impact of its mining activities. The company implements advanced technologies and best practices for waste management, 
                    water conservation, and reclamation efforts. Through continuous improvement and innovation, Asante strives to reduce its environmental 
                    footprint and promote sustainable resource management.
                </li>
                <li>
                    <strong>Biodiversity Conservation:</strong> Asante conducts biodiversity assessments prior to commencing mining activities and implements 
                    mitigation measures to minimize disruption to local ecosystems. The company invests in reforestation and habitat restoration projects to 
                    offset any ecological impacts. By preserving biodiversity, Asante contributes to the long-term health and resilience of the environment.
                </li>
                <li>
                    <strong>Energy Efficiency and Carbon Reduction:</strong> Asante is committed to reducing its carbon footprint and promoting energy efficiency 
                    throughout its operations. The company invests in renewable energy sources, such as solar and wind power, and implements energy-saving measures 
                    to minimize greenhouse gas emissions. By embracing sustainable energy solutions, Asante contributes to global efforts to mitigate climate change 
                    and transition to a low-carbon economy.
                </li>
            </ul>
            

          </div>
          <div class="tabs__pane -tab-item-5">
            <h2 class="text-accent-1">Innovation and Technology</h2>
            <p>
                Asante embraces innovation and technology to drive sustainability and improve operational efficiency.
            </p>
            <ul>
                <li>
                    <strong>Advanced Mining Technologies:</strong> Asante invests in advanced mining technologies to optimize resource extraction and minimize environmental 
                    impact. The company utilizes state-of-the-art equipment and processes to improve efficiency, reduce waste, and enhance safety in its operations.
                </li>
                <li>
                    <strong>Research and Development:</strong> Asante allocates resources to research and development initiatives aimed at developing innovative solutions for sustainable 
                    mining practices. The company collaborates with industry partners, research institutions, and technology providers to explore new technologies and methodologies that 
                    improve environmental performance and drive operational excellence.
                </li>
                <li>
                    <strong>Digitalization and Data Analytics:</strong> Asante leverages digitalization and data analytics to enhance decision-making and performance monitoring across its 
                    operations. The company collects and analyzes data to identify opportunities for optimization, resource conservation, and risk mitigation. By harnessing the power of data, 
                    Asante improves operational efficiency and sustainability outcomes.
                </li>
            </ul>
            

          </div>
      </div>
  </div>
  
    {{--  --}}
</section>
<br><br>

@endsection
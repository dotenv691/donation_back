<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $news = array(
            array(
                'id' => 1,
                'title' => 'Mongolia leads world in cancer mortality rate',
                'slug' => 'mongolia-leads-world-in-cancer-mortality-rate',
                'desc' => "ULAN BATOR, Feb. 4 (Xinhua) -- Mongolia has the world's highest rate of cancer mortality per 100,000, the country's National Cancer Center said Saturday.",
                'cover' => '1.jpg',
                'body' => '<p style="font-style: italic">
                ULAN BATOR, Feb. 4 (Xinhua) -- Mongolia has the worlds highest rate of cancer mortality per 100,000, the countrys National Cancer Center said Saturday.
            </p>
            <br />
            <p style="text-align:justify">In 2022, 4,548 people died of cancer in Mongolia with a population of 3.4 million, while at least 6,885 people were diagnosed with the disease in the country, the center said in a statement on the occasion of the World Cancer Day that falls on Feb. 4 each year.</p>
            <p style="text-align:justify">More than 70 percent of new cancer cases have been diagnosed too late, and 87 percent of cancer patients are those aged 45 years or older, it said, adding that liver, gastric, esophageal and cervical cancers accounted for the majority of all registered cases.</p>
            <p style="text-align:justify">Mongolia launched nationwide health checkups from last May to detect serious diseases early so as to promote a healthy lifestyle and narrow the life expectancy gap between men and women.</p>
            <p style="text-align:justify">Late diagnosis makes treatment less likely to succeed and reduces survival chances, the countrys Ministry of Health said in a statement, urging the public to actively participate in the checkups free of charge.</p>'
            ),
            array(
                'id' => 2,
                'title' => 'Accurately Targeting Women’s Cancers in Mongolia, with IAEA Support',
                'slug' => 'accurately-targeting-womans-cancers-in-mongolia-with-iaea-support',
                'desc' => 'Mongolia has a high burden of non-communicable diseases, and cancer – after cardiovascular disease – is the second leading cause of mortality in the country, according to the United Nations Interagency Task Force on the Prevention and Control of Noncommunicable Diseases.',
                'cover' => '2.jpg',
                'body' => '<p style="text-align: justify">
                Mongolia has a high burden of non-communicable diseases, and cancer – after cardiovascular disease – is the second leading cause of mortality in the country, according to the United Nations Interagency Task Force on the Prevention and Control of Noncommunicable Diseases.
            </br></br>
            “Cancer accounts for more than a quarter of all deaths,” explains Uranchimeg Tsegmid, Head of Non-Surgical Oncology at the National Cancer Centre (NCC), a busy hospital in Ulaanbaatar, which receives thousands of patients from across Mongolia seeking diagnosis and treatment. In 2020 alone, health officials in Mongolia reported more than 5,700 new cases of cancer, of which nearly 2,700 were diagnosed in women.
            </br></br>
            For women in Mongolia, the International Agency for Research on Cancer reports that cervical and breast cancers are among the four most common cancers, the other two being liver and stomach cancers. In 2020, the country reported 334 new <a href="https://gco.iarc.fr/today/data/factsheets/populations/496-mongolia-fact-sheets.pdf" target="_blank">cervical cancer cases</a> and lost 1,943 women to the cancer, in total.
            </br></br>
            Since 20141/, a series of complementary IAEA technical cooperation (TC) projects, have been implemented to help expand the scope and scale of the National Cancer Centre’s services and to enhance their accuracy and quality. Now, with the commissioning of a new treatment planning system (TPS) in 2021 and the introduction of advanced cancer treatment modalities in the last two years, hopes are high that cervical, breast and other common women’s cancers will be diagnosed at earlier stages and treated with greater effectiveness, ultimately improving patient outcomes.
            </br></br>
            As part of an ongoing TC project, radiation oncologists, medical physicists and radiation technicians operating modern <a href="https://www.iaea.org/newscenter/multimedia/videos/what-is-a-linac" target="_blank">linear accelerators</a> installed in the Radiation Oncology Department of the National Cancer Center of Mongolia have been trained at Giessen-Marburg University Hospital in Germany, Hiroshima University Hospital in Japan, and at the Korea Institute of Radiological & Medical Sciences (KIRAMS) in Seoul.
            </br></br>
            As a result, in 2018 CT-based 3D brachytherapy was officially introduced to provide effective radiation treatment to cervical cancer sites, with minimal side effects for normal, healthy organs and tissue. Since then, over 200 cervical cancer patients in the country have been able to receive brachytherapy per year.
            </br></br>
            The IAEA provided expert guidance and training to facilitate the introduction of 3D conformal radiotherapy (3DCRT), an advanced treatment method that allows clinicians to shape radiation beams to match the shape of the tumour. “The first 3DCRT procedure was delivered in June 2019,” said Dr Tsegmid, “and currently, more than 98 per cent of all patients can undergo and benefit from 3DCRT.”
            </br></br>
            Improved outcomes for cancer patients
            </br>
            The growing cancer care capacities of the National Cancer Centre are expected to improve the outcomes not only for patients with breast and cervical tumours, but for all cancer patients. “When we speak about women’s cancer, traditionally we mean cervix and breast cancers. But in case of Mongolia, another cancer site predominates among women—liver cancer,” said Dr Kamal Akbarov, a Radiation Oncologist in the IAEA’s Division of Human Health.
            </br></br>
            Liver cancer is the most common cancer in Mongolia, and it has the highest incidence and mortality rates in women, as well as in the general population. The number of new liver cancer cases in 2020 was almost three times higher than cervical cancer, and almost double the total number of breast and cervical cancers.
            </br></br>
            The application of sophisticated, high-precision radiotherapy techniques—such as stereotactic body radiation therapy (SBRT), which uses sophisticated image-guidance to pinpoint the exact location of cancers—can provide improved treatment results while minimizing the probability of side effects.
            </br></br>
            “The aim in the last four years was to meet the increasing demands for newer, more effective treatment modalities,” said Akbarov. “It was essential to upgrade radiotherapy capacities through the installation of advanced equipment, to strengthen the knowledge and skills of staff through advanced training in radiotherapy, to develop clinical guidelines in radiotherapy and to implement both quality assurance and quality control programmes.”
            </br></br>
            Two ongoing IAEA projects2/ are now helping to plan and prepare for the introduction of other image-guided therapies including SBRT, Intensity-modulated Radiation Therapy (IMRT) and Stereotactic Radiosurgery (SRS). “For cervical cancer, in particular, these techniques will help us to increase the dose to tumours, and reduce them elsewhere, thereby improving the quality of life of our patients,” said Dr Tsegmid.
            </br></br>
            The IAEA through its <a href="https://www.iaea.org/services/key-programmes/programme-of-action-for-cancer-therapy-pact" target="_blank">Programme of Action for Cancer Therapy (PACT) </a> and in cooperation with KIRAMS, is preparing to launch a series of fellowships to help train medical physicists, radiation oncologists and radiation therapy technologists in teams of three, to help enhance their ability to work collaboratively, safely and effectively.
            </br></br>
            These activities, and many more which support development priorities in the region, can be found in Compendium document, “<a href="https://www.iaea.org/sites/default/files/20/11/tc-journey-to-success-ap.pdf" target="_blank">Journeys to Success: A Collection of Success Stories from IAEA Technical Cooperation in Asia and the Pacific</a>.” The publication chronicles achievements and the substantial contribution of the IAEA’s technical cooperation programme, as described by IAEA partners and experts from the region, and can be found here.
            </p>'
            ),
            array(
                'id' => 3,
                'title' => 'Mongolia has the world’s highest rate of cancer mortality',
                'slug' => 'mongolia-has-the-worlds-highest-rate-of-cancer-mortality',
                'desc' => 'Mongolia has the world’s highest rate of cancer mortality per 100,000.',
                'cover' => '3.jpg',
                'body' => '<p style="text-align: justify">
                Mongolia has the world’s highest rate of cancer mortality per 100,000.
                </br></br>
                In 2022, 4,548 people died of cancer in Mongolia with a population of 3.4 million, while at least 6,885 pople were diagnosed with the disease in the country.
                </br></br>
                More than 70 percent of new cancer cases have been diagnosed too late, and 87 percent of cancer patients are those aged 45 years or older. Furthermore,  liver, gastric, esophageal and cervical cancers are accounted for the majority of all registered cases.
                </br></br>
                Mongolia launched nationwide health checkups from last May to detect serious diseases early so as to promote a healthy lifestyle and narrow the life expectancy gap between men and women.
                </br></br>
                Late diagnosis makes treatment less likely to succeed and reduces survival chances, the country’s Ministry of Health said in a statement, urging the public to actively participate in the checkups free of charge.
                </p>'
            ),
            array(
                'id' => 4,
                'title' => 'Changing the Course of Cancer in Mongolia',
                'slug' => 'changing-the-course-of-cancer-in-mongolia',
                'desc' => 'Inspired by her physician grandmother, Dr. Tsetsegsaikhan Batmunkh has strived to improve care in the East Asian nation',
                'cover' => '4.jpg',
                'body' => '<p style="text-align: justify">
                Inspired by her physician grandmother, <b><i>Dr. Tsetsegsaikhan Batmunkh</i></b> has strived to improve care in the East Asian nation 
                </br></br>
                <i>Mongolia has long suffered high rates of cancer mortality, but the statistics have been improving over the past decade due to significant government intervention. <b><i>Dr. Tsetsegsaikhan Batmunkh</i></b> has been at the center of it. A medical doctor and microbiologist, she began her career as a general practitioner in a remote area of the country and later worked for the Ministry of Health before starting the non-profit <a href="https://www.uicc.org/membership/national-cancer-council-mongolia" target="_blank">National Cancer Council of Mongolia</a>, which focuses particularly on health advocacy and supporting patients. She was recently appointed as a director of the new Medicine and Medical Device Regulatory Agency of Mongolia. She recently spoke with Think Global Health about fighting misinformation, HPV vaccines, and Mongolias response to the COVID-19 pandemic, among other topics.</i>
                </br></br>
                <b>Think Global Health:</b> From the beginning, why did you have such a strong interest in medicine?
                </br>
                <b>Tsetsegsaikhan B:</b> My grandmother was the first female oncologist in Mongolia. She was one of five doctors who set up the Cancer Hospital in Mongolia, and later she was the head of the gynecologyoncology department of the National Cancer Center in Mongolia. Her main area of work was cervical cancer because this was the leading cause of cancer at that time among women. And I remember that there were a lot of patients coming from the countryside for treatment, and most of them were very late-diagnosis cases. She was doing a lot of surgeries every day, doing a lot of consultations and advocacy-training for the women, and giving a lot of interviews to the media about how to prevent cervical cancer.
                </br></br>
                <b>"My grandmother was the first female oncologist in Mongolia"</b>
                </br>
                <b>Think Global Health:</b> How would you describe the health sector in Mongolia today?
                </br>
                <b>Tsetsegsaikhan B:</b> Compared with high-income countries, we are far behind, but compared with some low- and middle-income countries, our health sector is not that bad. We have a relatively good health system structure, with family clinics and general practitioners throughout the country, hospitals in all provinces, and a good patient referral system. But still there are a lot of things we need to strengthen or improve. The geographical distribution is a difficult challenge. Climatic conditions are a big factor: we have really harsh winters.  Imagine delivering care to really remote areas you cant reach by ordinary car. Sometimes doctors need to ride a horse or camel to reach families. I admire doctors who are working in really rural and remote areas because it takes a lot of dedication.
                </br></br>
                <b>Think Global Health:</b> What does cancer look like in Mongolia?
                </br>
                <b>Tsetsegsaikhan B:</b> Cancer is the second-leading cause of mortality in our country. Compared to global data, the prevalence and mortality of cancer are very high. Liver, stomach, lung, cervical, and esophageal cancers are the top-five. These are types of cancer that can be prevented through public health interventions, through education, through vaccination, and early screening. Most importantly, two-thirds of cancers are diagnosed at late stage. In the 1990s, around 75 percent of cancers were diagnosed at stage 3 or 4, and now, 30 years later, the picture is still the same: around 72 percent of cancers are diagnosed at late stage. So, we have a really sad story with cancer in our country.
                </br>
                <b>Think Global Health:</b> What are the biggest opportunities to change that trend?
                </br>
                <b>Tsetsegsaikhan B:</b> The government has done a lot to reduce liver cancer, through vaccination programs, screenings, and providing good treatment policies and options. We started a Hepatitis B vaccination program in the 1990s, so the prevalence has been decreasing over the years.
                </br>
                Hepatitis C is a challenge. For the last five years, the government has run a liver cancer free program: screening is covered by the health insurance, and most of the fee for treatment is covered by the government. Medicines that are really expensive in the United States are provided at a discounted price, due to government negotiation with the manufacturer. Due to this, the number of cases that are diagnosed early is increasing, and people can get early treatment with good medications.
                </br>
                <b>72 Percent</b>
                </br></br>
                In Mongolia, 72 percent of cancers are diagnosed at late stage
                </br></br>
                <b>Think Global Health:</b> How does gender influence the diagnosis and treatment of cancer in Mongolia?
                </br>
                <b>Tsetsegsaikhan B:</b> Even now, we still have stigma around female cancer, especially cervical cancer. Some of the risk factors are having an early sex life, having multiple partners, and this causes a lot of stigma around this cancer. Even partners and husbands dont understand this. When a wife is diagnosed with cervical cancer, they think she did something wrong. Some partners even leave their wives because she got cervical cancer. So its still a lot of misunderstanding and misinformation among community about female cancers. And this is one reason for late diagnosis, because women dont see a doctor on a regular basis for the screening out of fear.
                </br></br>
                <b>Think Global Health:</b> What has been the focus of the National Cancer Council?
                </br>
                <b>Tsetsegsaikhan B:</b> We tried to focus more on prevention, treatment, and support services. Because liver cancer was the main point of concern of the government, our National Cancer Council focused mainly on cervical cancer. The main cause of cervical cancer is the human papilloma virus. We had a really sad story with HPV vaccination in Mongolia because we were one of the pilot countries in the Western Pacific region to have HPV vaccination in 2012, supported by the United States Millennium Challenge Corporation. We were vaccinating girls from age 12 to 15 in two districts of the capital city and two provinces with high prevalence of sexually transmitted diseases and cervical cancer—and suddenly a group of women came along and spread the message that the vaccination was unsafe and the vaccines were causing infertility. And because of this misinformation, a lot of mothers turned against this vaccination, and vaccination programs stopped.
                </br></br>

                <b>Think Global Health:</b> How did you make sense of the opposition to this vaccine?
                </br>
                <b>Tsetsegsaikhan B:</b> It was mostly a political issue, because that year was a parliamentary election year. Opposition parties wanted to convince the public that the government was not working or doing something bad. It was a really shocking experience for our country. We have really good immunization coverage—more than 95 percent of children are fully vaccinated, and there has never been an issue with vaccine skepticism. But with the HPV vaccination, we had really different story, and it negatively impacted childhood immunizations as well.
                </br></br>
                <b>Think Global Health:</b> What approach did the National Cancer Council take?
                </br>
                <b>Tsetsegsaikhan B:</b> I had conversations with different stakeholders who were afraid of talking about this vaccine, and I decided that we needed a really good research –base, to provide evidence. Thats why we conducted a study of all girls who had been vaccinated previously, and showed the vaccine was really effective for the types of HPV that cause cervical cancer and there was no difference in fertility.
                Then we focused on health professionals and the Ministry of Health, talking about reintroducing the HPV vaccine. It took us almost four years, but the government finally decided to start vaccination and now the vaccine is available on a voluntary basis. So proper communication is very important for the new vaccine introduction.
                </br></br>
                <b>"It took us almost four years, but the government finally decided to start HPV vaccination"</b>
                </br></br>
                Another big risk-factor for cancer is tobacco. When I was working at the Ministry of Health, it took us several years to pass the Tobacco Control Law. At that time, smoking indoors in restaurants was not prohibited and people could smoke wherever they wanted, but restaurant owners or business people were against the law. Then when I was at the National Cancer Council, for several years we tried to advocate for increases in tobacco taxes—we advocated that the tax should be increased year-by-year—but we didn’t succeed because its really political. There are a lot of powerful people behind the tobacco business. And still, the percentage of tax for tobacco products is really low in our country.
                </br>
                <b>Think Global Health:</b> When you were offered your role at the Medicine and Medical Device Regulatory Agency, what did you see as the opportunity?
                </br>
                <b>Tsetsegsaikhan B:</b> Our government has been trying to set up this new agency for the last 10 years; finally, last December, the Parliament established the agency. The new agency gathers professionals who were previously scattered across the Ministry of Health, as inspectors, in the lab, so it is really historic. Our main priority is to become part of the global community regulating medical products and medicines, and there are a lot of things we need to learn: how to properly monitor medicines, how to avoid substandard falsified medicines, and now with COVID-19, how to deal with new vaccines, how to evaluate safety and adverse reactions, and which kind of new medicines should be introduced.
                </br></br>
                <b>Think Global Health:</b> COVID-19 is still front-page news in much of the world. In general, how has Mongolias response been?
                </br>
                <b>Tsetsegsaikhan B:</b> In general, I think our government didnt do too bad. At the start of the pandemic we closed the borders and had really strict measures because we neighbor China. And weve done a great job with vaccination: we have vaccinated most of the eligible population, and through other direct procurement and donation the government has provided many different options — Sinopharm, Sputnik, AstraZeneca, and Pfizer—so most of the population could have some choices. But the Delta variant has been increasing over the last two weeks, so we need to consider some booster dosing or other options for preventing its spread.
                </br>
                <i>EDITORS NOTE: This interview was conducted via telephone and has been edited for length and clarity. </i>
                </p>'
            ),
            array(
                'id' => 5,
                'title' => 'Cirrhosis and liver cancer cause 15% of all deaths in Mongolia. Now the government is waking up to the issue – and tackling the hepatitis that triggers it',
                'slug' => 'cirrhosis-and-liver-cancer-cause-15%-of-all-death-in-mongolia-now-the-goverment-is-waking-up-to-the-issue-and-tackling-the-hepatitis-that-triggers-it',
                'desc' => 'Danzan Purev beams as he shows members of a support group photos of his infant nephew on his iPhone. The 68-year-old geologist is charismatic and jokes with the others gathered in the room in Ulan Bator. But his mood changes as he begins to recount his long experience with hepatitis, a disease that has blighted his life.',
                'cover' => '5.jpg',
                'body' => '<p style="text-align: justify">
                Danzan Purev beams as he shows members of a support group photos of his infant nephew on his iPhone. The 68-year-old geologist is charismatic and jokes with the others gathered in the room in Ulan Bator. But his mood changes as he begins to recount his long experience with hepatitis, a disease that has blighted his life.
                </br>
                Purev was diagnosed with hepatitis B and C in the early 1990s. By the end of the decade his health and quality of life had deteriorated, leaving him constantly sick and fatigued. He had to sell his business to finance a trip to Korea to undergo treatment, which was not successful. “Financially, I just went down,” he says.
                </br></br>
                Once back in <a href="https://www.theguardian.com/world/mongolia" target="_blank">Mongolia</a>, he was unable to afford hepatitis drugs, and began to lose hope as the disease continued to affect his liver. “I was really scared,” says Purev. “My dad and all the relatives on my dad’s side died of liver cancer and liver disease. I didn’t want to be one of them. I just wanted to keep fighting and cure myself.”
                </br>
                Fortunately, he heard about the non-profit Onom Foundation, which offers screening and treatment for hepatitis. Today he is cured of hepatitis C, has low levels of hepatitis B, and the health of his liver, which at one point was two-thirds non-functional, has improved.
                </br></br>
                Purev has been lucky. According to the World Health Organization, Mongolia has the <a href="https://www.who.int/Westernpacific" target="_blank">world’s highest rate of liver cancer,</a> as well as the <a href="http://www.journal-of-hepatology.eu/article/S0168-8278(17)31184-4/abstract" target="_blank">highest mortality rate from the disease</a>. Each year, liver cancer and liver cirrhosis account for 15% of all deaths. Chronic hepatitis is the <a href="https://www.cancer.org/cancer/liver-cancer/causes-risks-prevention/risk-factors.html" target="_blank">most common risk factor</a> in developing liver cancer, and <a href="http://www.wpro.who.int/mongolia/mediacentre/releases/20160318_viral_hep_prevention_control/en/" target="_blank">400,000 of Mongolia’s 3 million citizens</a> are diagnosed with a hepatitis virus.
                </br></br>
                The WHO says hepatitis cases spiked in Mongolia in the 1970s and 80s, when syringes were regularly reused and dental and surgical practices were not always hygienic. Additionally, the country has high rates of “<a href="https://www.who.int/en/news-room/fact-sheets/detail/hepatitis-d" target="_blank">hepatitis B and D super-infection</a>”, which occurs when someone with chronic hepatitis B becomes infected with hepatitis D.
                </br>
                “There is no other country in the world that has a problem like this,” says Dr Naranbaatar Dashdorj, co-founder of the Onom foundation, which runs group therapy sessions for those like Purev living with hepatitis in Mongolia’s capital, as well as providing hepatitis screening and treatment to thousands of people.
                </br></br>
                But the government is waking up to the health crisis, pouring significant money into screening and treatment in an attempt to reduce cases of liver cancer. By 2020, ministers want to eliminate hepatitis C and significantly reduce liver cancer and cirrhosis deaths.
                </br>
                Last year, parliament ploughed 23.4bn Mongolian tugrik (£7m) into the country’s health insurance scheme to subsidise hepatitis medicine. This year, the government allocated MNT 226bn for screening and treatment until 2020. This money also covers free hepatitis testing for those between the ages of 40 and 60, who make up the bulk of liver cancer patients. This will be extended to a younger cohort in 2018.
                </br></br>
                This cash injection will reduce patient costs drastically. After subsidies, patients pay between $3 (£2.25) and $13 (£9.70) for hepatitis B medicine, and between $65 and $215 for hepatitis C medicine. Before subsidies were introduced, medicines could cost thousands of dollars.
                </br></br>
                “In the area of treatment Mongolia is making really good progress in screening the people, identifying people with chronic hepatitis,” says Narantuya Jadambaa, a technical officer in Mongolia for the WHO. “But we need more work also to stop the transmission within the whole society. It would require more efforts and even more financial support as well.”
                </br></br>
                The National <a href="https://www.theguardian.com/society/cancer" target="_blank">Cancer</a> Centre, a busy hospital where Mongolians from all over the country come for diagnosis and treatment, performs 450 liver surgeries a year. This year, it will start performing liver transplants. Dr Chinburen Jigjidsuren, the centre’s general director, says in the past two years approximately 160 Mongolians have travelled overseas for transplants. He hopes more people will now stay in-country for surgery. About 70 people are on the government waiting list for a liver transplant.
                </br></br>

                Dr N Yumchinserchin, head of the intervention radiology department at Mongolia’s National Cancer Centre, explains that their angiographic equipment is outdated. If the equipment fails, it would be difficult to find spare parts to repair it. Photograph: Hannah Griffin
                </br>
                But a major factor in reducing liver cancer deaths is early diagnosis. Many Mongolians are not diagnosed until they are late-stage and inoperable. Jigjidsuren says many people travel from their rural homes to the capital only to be told there is little that can be done. He hopes the centre can establish a system to connect provincial health centres by internet so patients can have online consultations with doctors prior to coming to the city. “We are trying to avoid this problem and trying to establish a good system,” he says. “I hope that Mongolia will be an example to the world [on] how we fight liver cancer.”
                </br></br>
                Myamjav Jargalsaikhan, 63, is another member of the Onom foundation’s support group. He was diagnosed with hepatitis C and liver cirrhosis 30 years ago, and had been receiving treatment each year. In 2013, after retiring from a 40-year career as a technical engineer at a printing company in Ulan Bator, he was diagnosed with liver cancer. Just as he was ready to enjoy a more carefree life after years of hard work, he was sidelined.
                </br></br>
                “Any plans I had made for the future just all stopped,” he says. But unlike many other patients, Jargalsaikhan’s liver cancer was operable, and he has been cancer-free for three years. Despite all the challenges, he considers himself fortunate. “I really consider myself lucky to have had the disease for so many years and survived it.”
                </p>'
            ),
        );
        foreach($news as $magazine) {
            $n = new News;
            $n->id = $magazine['id'];
            $n->title = $magazine['title'];
            $n->tags = 'article';
            $n->slug = $magazine['slug'];
            $n->cover = $magazine['cover'];
            $n->desc = $magazine['desc'];
            $n->body = $magazine['body'];
            $n->save();
        }
    }
}

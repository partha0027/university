@extends('layout.master')

<section class="section why-us" data-section="section2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 px-5 py-5 mt-5">
                @include('vertical-nav')
            </div>
            <div class="col-md-10 px-5">
                <div class="row">


                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2> Rules and Regulation</h2>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div id='tabs' class="mt-1">
                            <ul>
                                <li><a href='#tabs-1' style="font-size: 14px">Yearly System</a></li>
                                <li><a href='#tabs-2' style="font-size: 14px">Semester System</a></li>
                                <li><a href='#tabs-3' style="font-size: 14px">M.Sc-IT/MCA</a></li>
                                <li><a href='#tabs-4' style="font-size: 14px" style="">PG Diploma</a></li>
                                <li><a href='#tabs-5' style="font-size: 14px" style="">B.Sc-IT/BCA/PGDCA</a></li>
                                <li><a href='#tabs-6' style="font-size: 14px" style="">BA and B.COM</a></li>
        
                            </ul>
                            <section class='tabs-content text-justify'>
                                <article id='tabs-1'>
                                    <div class="row text-justify">
        
                                        <div class="col-md-12">
        
                                            <p> 1. The MA/MSc/MCom/MCJ degree Programme shall of two
                                                years duration and be divided into two modules viz. PREVIOUS and FINAL,
                                                examinations for which shall be held annually.</p>
                                            <p>2. Each PREVIOUS and FINAL module shall consist of requisite courses/papers
                                                prescribed as per syllabus.</p>
        
                                            <p>3. A candidate will be allowed to appear in the previous examinations only after
                                                completion of the academic yearin which he/she is enrolled. Subsequently after
                                                completion of two academic years, the candidates will be allowed to appear in
                                                the Final examinations.</p>
                                            <p>
                                                4. The candidates for the MA/MSc/MCom/MCJ degree shall be examined for the
                                                number of courses/papers specified for each course as mentioned above.
                                            </p>
                                            <p>
                                                5. Each course/paper in the Previous and Final will carry the requisite Credits
                                                prescribed as per syllabus for each subject.
                                            </p>
        
                                            <p>
                                                6. The year end examinations shall carry 80% weightage for each course/paper and
                                                Home Assignments/Sessional examinationsshall carry 20% weightage.
                                            </p>
                                            <p>
                                                7. The year examinations shall be of three-hour duration for each course/paper.
                                                The Home Assignments/Sessional examinations shall be conducted by the
                                                Coordinators of each subject.
                                            </p>
                                            <p>
                                                8. In order to pass/clear a course/paper in a subject, a candidate must secure
                                                at least 35 marks in each course/paper. On passing/clearing of a particular
                                                course/paper, it will be credited to the individual accounts of the candidates.
                                            </p>
                                            <p>
                                                9. A candidate will be awarded MA/MSc/MCom/MCJ degree only after
                                                passing/clearing all the courses/papers prescribed for the degree in the
                                                syllabus and acquiring the total number of Credits, required for award of such
                                                degree.
                                            </p>
                                            <p>
                                                10. A candidate securing 60%(sixty) or above of the aggregate marks of the
                                                Previous and Final Examinations taken together shall be placed in the First
                                                Class.
                                            </p>
                                            <p>
                                                11. A candidate securing 45%(forty five) or above but less than 60%(sixty) of
                                                the aggregate marks of the Previous and Final Examinations taken together shall
                                                be placed in the Second Class.
        
        
                                            </p>
                                            <p>
                                                12. A candidate securing less than 45%(forty five) of the aggregate marks of the
                                                Previous and Final Examinations taken together but cleared/passed all the
                                                courses/papers and acquired/required number of Credits shall be declared as
                                                SimplePass.
                                            </p>
                                            <p>
                                                13. A candidate for the MA/MSc/MCom/MCJ degree must pass/clear all the
                                                courses/papers prescribed for a particular subject within a period of maximum
                                                four academic years from the date of his/her enrollment in order to get the said
                                                degree.
                                            </p>
                                            <p>
                                                14. For any programme offered by the IDOL, a candidate need not clear all the
                                                couses/papers in one examination. His/her credits for each course/paper cleared
                                                will be carried over to subsequent year.
                                            </p>
                                        </div>
        
        
        
                                    </div>
        
                                </article>
                                <article id='tabs-2'>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>i) The examinations for the MA/MSc/MCom degree shall be held half-yearly as per
                                                schedule. The examinations shall be in semesters. There are no betterment
                                                schemes.</p>
                                            <p>
                                                ii) The candidates for the MA/MSc/MCom degree shall be examined for the number
                                                of papers specified for each course as mentioned above.
                                            </p>
                                            <p>
                                                iii) The minimum pass marks required for passing a semester examination shall be
                                                35 percent in each paper separately.
                                            </p>
                                            <p>
                                                iv) The candidate will be awarded degree as:
                                            <p class="mx-5"> a) 1st Class who secures 60% and above in aggregate of all the
                                                semesters</p>
                                            <p class="mx-5"> b) 2nd Class who secures 45% and above in aggregate of all the
                                                semesters</p>
                                            <p class="mx-5"> c) Simple Pass who secures 35% and above in aggregate of all the
                                                semesters</p>
                                            </p>
        
        
                                        </div>
        
                                    </div>
                                </article>
                                <article id='tabs-3'>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>i) The examinations for the M.Sc.-IT/M.C.A. degree shall be held half-yearly as
                                                per schedule. The examinations shall be in semesters. Even Semester and Odd
                                                Semester examinations will be held separately. There are no betterment schemes
                                            </p>
                                            <p>ii) The candidates for the M.Sc.-IT/M.C.A. degree shall be examined for the
                                                number of papers specified for each course as mentioned above.</p>
                                            <p>
                                                iii) The minimum pass marks required for passing a semester examination shall be
        
                                            <p class="mx-5">a)35 percent in each theory paper separately.</p>
                                            <p class="mx-5">b) 40 percent in each practical paper separately.</p>
                                            <p class="mx-5">c) 35 percent and 40 percent for theory and practical part
                                                respectively in case of
                                                a paper consisting of both theory and practical part.</p>
                                            </p>
                                            <p>
                                                iv) The candidate will be awarded degree as:
                                            <p class="mx-5">a)1st Class who secures 60% and above in aggregate of all the
                                                semesters</p>
                                            <p class="mx-5">b) 2st Class who secures 40% and above in aggregate of all the
                                                semesters.</p>
                                            <p class="mx-5">c) 3Simple Pass who secures 35% and above in aggregate of all the
                                                semesters</p>
                                            </p>
        
        
                                        </div>
                                    </div>
                                </article>
                                <article id='tabs-4'>
                                    <div class="row">
                                        <div class="col-md-12">
        
                                            <p>1. There will be one final examination at the end of each academic year.</p>
                                            <p>2. A candidate for the examination shall be examined as per syllabi where each
                                                written full
                                                paper shall be of 3 hours duration.</p>
                                            <p class="mx-5">
                                                a. Each paper shall carry 100 marks. The minimum pass marks required for passing
                                                the examination shall be 35 percent in each paper separately and will be awarded
                                                diploma as:</p>
                                            <p class="mx-5"> 1st Class who secures 60% and above in aggregate</p>
                                            <p class="mx-5">2nd Class who secures 40% and above in aggregate</p>
                                            <p class="mx-5"> Simple Pass who secures 35% and above in aggregate</p>
                                            </p>
                                            <p class="mx-5"> b.A student will be allowed to clear the final year's examination
                                                in maximum three consecutive years.</p>
                                        </div>
                                    </div>
                                </article>
                                <article id='tabs-5'>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>i) The examinations for the B.Sc.-IT/B.C.A./P.G.D.C.A. shall be held half-yearly
                                                as per schedule. The examinations shall be in semesters. There are no betterment
                                                schemes.</p>
                                            <p>ii) The candidates for the B.Sc.-IT/B.C.A./P.G.D.C.A. shall be examined for the
                                                number of papers specified for each course as mentioned above.</p>
                                            <p>iii) The minimum pass marks required for passing a semester examination shal I.
                                                be
        
                                            </p>
                                            <p class="mx-5"> 35 percent in each theory paper separately,</p>
                                            <p class="mx-5"> 40 percent in each practical paper separately,</p>
                                            <p class="mx-5"> 35 percent and 40 percent for theory and practical part
                                                respectively in case of a paper consisting of both theory and practical part.
                                            </p>
                                            <p>iv) The candidate will be awarded degree as:</p>
                                            <p class="mx-5"> 1st Class who secures 60% and above in aggregate of all the
                                                semesters</p>
                                            <p class="mx-5"> 2nd Class who secures 40% and above in aggregate of all the
                                                semesters
                                            </p>
                                            <p class="mx-5"> Simple Pass who secures 35% and above in aggregate of all the
                                                semesters</p>
                                        </div>
                                    </div>
                                </article>
                                <article id='tabs-6'>
                                    <div class="row">
                                        <div class="col-md-12">
        
                                            <p>The Standing Committee of the Academic Council of Gauhati University, in its
                                                meeting held on 22/10/2011 resolved to introduce BA & B. Com (General course)
                                                from the academic session 2012-2013. Students can pursue B.Com & BA general
                                                course with MIL (Assamese, Bodo, Nepali, Alt. English), English, Political
                                                Science, Education, Philosophy, Economics and History under Semester system.</p>
                                            <p class="mx-2">1. The syllabus and the curriculum for the distance mode course
                                                will be the same as those for the regular courses.</p>
                                            <p class="mx-2">2. Students will appear for the end semester examination for those
                                                courses offered under IDOL along with regular candidates in their respective
                                                colleges. Question papers and syllabus will the same as those for the regular
                                                courses.</p>
                                            <p class="mx-2">3. Gauhati University affiliated colleges and IDOL study centers
                                                (affiliated to other Universities) will enroll students at the beginning of each
                                                semester along with other regular students in the prescribed application form
                                                provided by IDOL.</p>
                                            <p class="mx-2">4. The total course fees (study materials, counseling and
                                                assignment)
                                                for the BA General course shall be Rs. 2000/- & for B. Com Rs. 2500/- per
                                                semester excluding the Registration & Examinations fees.</p>
                                            <p class="mx-2">5. College will organize counseling classes/personal contact
                                                programme for those students offering courses through distance mode as per norms
                                                set by IDOL (10% of the total hours dedicated for regular course)</p>
                                            <p class="mx-2">6. Students offering courses/subjects through distance mode shall
                                                be
                                                required to Submit one/two home assignments during the semester as a part of
                                                their internal evaluation in lieu of the internal examinations, seminars
                                                required for the regular courses.</p>
                                            <p class="mx-2">7. The examination forms for appearing in the semester
                                                examinations shall be sent to the controller of Examinations, Gauhati University
                                                as per schedule notified by him.Notwithstanding anything mentioned above, if any
                                                confusion arises during the Course of the semester or examinations/evaluations,
                                                the decision of the Vice-Chancellor be final.</p>
                                        </div>
                                    </div>
                                </article>
        
                            </section>
                        </div>
                    </div>
                </div>

            </div>
        </div>

       
    </div>
</section>

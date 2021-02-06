@extends('layouts.custom')

@section('title','Resume')
@section('content')

<div class="resume-container">

    <div class="resume-content">
        <div class="rb1">
        </div>
        <div class="rb2">

            <div class="basicinfo-wrapper">
                <div><img src="{{asset('storage/IMG20201229155251.jpg')}}" alt="profiles">
                    <div class="basicinfo-name-wrapper">
                        <h4>Personal Information</h4>
                        <table>
                            <tr>
                                <td><span>Name</span></td>
                                <td>
                                    <p>Brian Orbino</p>
                                </td>
                            </tr>
                            <tr>
                                <td><span>Age</span></td>
                                <td>
                                    <p>21</p>
                                </td>
                            </tr>
                            <tr>
                                <td><span>Date of Birth</span></td>
                                <td>
                                    <p>November 29 ,1999</p>
                                </td>
                            </tr>
                            <tr>
                                <td><span>Gender</span></td>
                                <td>
                                    <p>Male</p>
                                </td>
                            </tr>
                            <tr>
                                <td><span>Civil Status</span></td>
                                <td>
                                    <p>Single</p>
                                </td>
                            </tr>
                            <tr>
                                <td><span>Nationality</span></td>
                                <td>
                                    <p>Filipino</p>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="primariin">
                        <table>

                            <tr>
                                <td><i class="fa fa-map-marker" aria-hidden="true"></i></td>
                                <td><span> 278 salem St Kalawag II, ISULAN SULTAN KUDARAT</span></td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-at"></i></td>
                                <td><span>brianhiddenfeelings@gmail.com</span></td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-phone-alt"></i></td>
                                <td><span>09366303145</span></td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-globe-asia"></i></td>
                                <td><span>https://kingsdev101.herokuapp.com</span></td>
                            </tr>
                        </table>








                    </div>
                </div>
                <div class="bttom-content">

                    <div class="resume-box">
                        <h3>About Me</h3>
                        <p> I am a dependable hardworking individual self thought developer. Can handle multiple tasks
                            on a daily basis. Able to think and find possible ways to solve problem . working well under
                            pressure. I am honest and trustworthy. Willing to learn new things and want to grow with
                            your team. Capable in coding design and backend development. I want to take the opportunity
                            working in your company and gain more experience.</p>
                    </div>
                    <div class="resume-box">
                        <h3>What I Can Offer</h3>
                        <ul>

                            <li>Front-End Developer</li>
                            <li>Front-End Support</li>
                            <li>Web Design Coder</li>
                            <li>Back-End Support</li>
                            <li>Web Developer</li>

                        </ul>
                    </div>
                    <div class="resume-box">
                        <h3>Skills</h3>
                        <ul>
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>JAVASCRIPT</li>
                            <li>PHP</li>
                            <li>LARAVEL</li>
                            <li>Js few library</li>
                        </ul>
                        <p>
                            I Understand Object Oriented Programming and also familiar in different language such as
                            Java, C#, few Js library like React.js and Vue.js</p>
                    </div>





                    <div class="resume-box">
                        <h3>Educational Attainment</h3>

                        <div class="cureent"> Bachelor of Science in Information Technology (BSIT) third year college Of
                            Sultan Kudarat State University(Isulan Campus) 2020-2021<br></div>
                        <table>

                            <tr>
                            <tr>
                                <td>Senior HighSchool</td>
                                <td> ISULAN NATIONAL HIGHSCHOOL</td>
                                <td> Information and Communications Technology (ICT) Strand (2017-2018)</td>
                            </tr>
                            <tr>
                                <td>HighSchool</td>
                                <td> ISULAN NATIONAL HIGHSCHOOL</td>
                                <td> Information and Communications Technology (ICT) Strand (2015-2016)</td>
                            </tr>



                        </table>

                    </div>



                </div>
            </div>

        </div>



    </div>

    @endsection
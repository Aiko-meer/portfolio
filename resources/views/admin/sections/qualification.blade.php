<section class="qualification section">
            <h2 class="section__title" data-heading="My Journey">Qualification</h2>
           
           
  
            
            <div class="qualification__container container grid">
                <div class="education">
                    <h3 class="qualification__title">
                        <i class="uil uil-graduation-cap"></i>
                        Education 
                        <a href="{{route('qualification.index')}}" class="button">Edit</a>
                    </h3>
                    @foreach ($education as $edu )
                    <div class="timeline">
                        <div class="timeline__item">
                            <div class="circle__dot"></div>
                            <h3 class="timeline__title">{{$edu->grade}}</h3>
                            <p class="class__text">{{$edu->school}}</p>
                            <span class="timeline__date"><i class="uil uil-calendar-alt"></i>
                                {{$edu->year}}
                            </span>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="experience">
                    <h3 class="qualification__title">
                        <i class="uil uil-briefcase-alt"></i>
                        Experience
                        <a href="{{route('expeirence.index')}}" class="button">Edit</a>
                    </h3>
                    <div class="timeline">
                        <div class="timeline__item">
                            <div class="circle__dot"></div>
                            <h3 class="timeline__title">LGU (city Hall)</h3>
                            <p class="class__text">Assistant Engineer</p>
                            <span class="timeline__date"><i class="uil uil-calendar-alt"></i>
                            219-2020 
                            </span>
                        </div>
                    </div>

                    <div class="timeline">
                        <div class="timeline__item">
                            <div class="circle__dot"></div>
                            <h3 class="timeline__title">EastWest Rural Bank Inc.</h3>
                            <p class="class__text">Assistant Engineer</p>
                            <span class="timeline__date"><i class="uil uil-calendar-alt"></i>
                            2024
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
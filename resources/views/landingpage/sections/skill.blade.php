<section class="skills section" id="skills">
            <h2 class="section__title" data-heading="My Abilities">My Experience</h2>

            <div class="skills_container container grid">  
                <div class="skills__tabs">
                    @foreach ($category as $cat )         
                    <div class="skills__header skills__active" data-target="#{{$cat->name}}">
                        <i class="uil uil-brackets-curly skills__icon"></i>
                       
                            
                      
                        <div>
                            <h1 class="skills__title">{{$cat->name}}</h1>
                            <span class="skills__subtitle">{{$cat->description}}</span>
                        </div>
                       
                        <i class="uil uil-angle-down skills__arrow"></i>
                    </div>
                    
                    @endforeach 
                  
                  

                  
                    <a href="{{route('skill.index')}}" class="button">Edit Skill</a>
                    <a href="{{route('category.index')}}" class="button">Edit Category</a>
                </div>   

                <div class="skills__content">
                  @foreach ($category as $tabs )
                      
                 
                    <div class="skills__group skills" data-content id="{{$tabs->name}}">
                       
                        <div class="skills__list grid">
                           
                            @foreach ($skill as $skills )
                          
                                
                            @if ($skills->type == $tabs->name)
                                
                        
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">{{$skills->title}}</h3>
                                    <span class="skills__number">{{$skills->percent}}</span>
                                </div>

                                <div class="skills__bar">
                                    <span class="skills__percentage" style="width: {{$skills->percent}}%;"></span>
                                </div>
                            </div>
                            @endif
                            @endforeach
                           
                        </div>
                       
                    </div>
                    @endforeach
        
                </div>
            </div>
        </section>
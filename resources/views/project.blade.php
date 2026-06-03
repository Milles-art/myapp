    @extends('layouts.app') 

    @section('content') 
    <div class="container-fluid my-4">
        <div class="row g-4"> 
            <!-- Left Column: Fixed Width Skills (Takes 3 out of 12 columns) -->
            <div class="col-md-3">
                <div class="card h-100"> 
                    <div class="card-body"> 
                        <h4 class="text-center mb-4">SKILLS</h4> 
                        
                        <div class="mb-4">
                            <h5 class="text-primary">Frontend</h5> 
                            <ul class="list-group list-group-flush"> 
                                <li class="list-group-item">Javascript</li> 
                                <li class="list-group-item">React Js</li> 
                                <li class="list-group-item">Bootstrap</li> 
                                <li class="list-group-item">Tailwind CSS</li> 
                            </ul> 
                        </div>

                        <div>
                            <h5 class="text-primary">Backend</h5> 
                            <ul class="list-group list-group-flush"> 
                                <li class="list-group-item">PHP</li> 
                                <li class="list-group-item">Laravel</li> 
                                <li class="list-group-item">Node Js</li> 
                                <li class="list-group-item">REST API Development</li> 
                                <li class="list-group-item">MySQL</li> 
                                <li class="list-group-item">PostgreSQL</li> 
                            </ul> 
                        </div>
                    </div> 
                </div> 
            </div> 

            <!-- Right Column: Projects Grid (Takes 9 out of 12 columns) -->
            <div class="col-md-9">
                <h4 class="mb-4">PROJECTS</h4>
                
                <!-- Nested Responsive Grid for 6 Cards (3 columns on desktop, 2 on tablet, 1 on mobile) -->
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-3">
                    <!-- Project Card 1 -->
                    @foreach ($projects as $project )
                        
                    
                    <div class="col">
                        <div class="card h-100"> 
                            <div class="card-body d-flex flex-column justify-content-between"> 
                                <div>
                                    <h5 class="card-title fw-bold">{{ $project->title }}</h5> 
                                    <p class="card-text text-muted small">{{ $project->description }}</p>
                                </div>
                                <div class="d-flex flex-wrap gap-1 mt-3">
                                    <span class="badge bg-dark">{{ $project->tech_stack }}</span>
                                    
                                </div>
                            </div> 
                        </div>
                    </div>
                    @endforeach

                </div>
            </div> 
        </div> 
    </div> 
    @endsection
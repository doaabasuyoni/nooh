@extends('layouts.app')
@section('title','Home Page')
@section('content')
<div class="my-div"></div>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">
    @foreach($r as $a)
      <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
        <img src="/changeimage/{{$a->imagefirst}}" class="d-block w-100" style="height: 490px;">
      </div>
      <div class="carousel-item">
        <img src="/changeimage/{{$a->imagesec}}" class="d-block w-100" style="height: 590px;">
      </div>
      <div class="carousel-item">
        <img src="/changeimage/{{$a->imagelast}}" class="d-block w-100" style="height: 590px;">
      </div>
    @endforeach
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<a href="/changimage"><button type="button" class="btn " id="d">Chang Image</button> </a>

<div class="wrapper">
  <div class="cols cols0">
    <h1>Welcome<span class="multiText"></span></h1>
  <h2 >Clinical field training</h2>
  <p  >in actual work settings, which qualifies them and enhances their skills to apply what they have learned for serving patients and society</p>
  </div>
</div>
<!-- New-->
<header id="t1">
  <div>
    <ul>
      <li><a href="/new" id="r1">All News</a></li>
    </ul>
</div>
  <h1 id="a1">Latest News</h1>
</header>
<div class="container">
  <div class="row py-3">
    @foreach($rows as $item)
      <div class="col-md-4 text-center">
        <div class="card bg-dark text-white">
        <a href="/new/{{$item->slug}}" style="color:white">
          <div class="image-container" style="position:relative;">
              <img src="/newimage/{{$item->image_path}}" class="card-img" alt="...">
               <div class="card-img-overlay" style="position:absolute; bottom:0; left:0; ">
                <h5 class="card-text" style="position:absolute; bottom:0; left:0;margin:15px;color:white">{{$item->title}}</h5>
              <p class="card-title" style="color: white; font-size: 12px;">{{$item->updated_at}}</p>
            </div>
           
          </div>
          </a>
        </div>
      </div>
    @endforeach
  </div>
</div>
<!-- end New-->
<!--  New-->
<header id="t1">
  <div>
    <ul>
      <li><a href="/advertisements" id="r1">All Advertisements</a></li>
    </ul>
</div>
  <h1 id="a1">Latest Advertisements</h1>
</header>
<div class="container">
  <div class="row py-3">
    @foreach($row as $item)  
      <div class="card mb-3" style="width: 940px;">
  <div class="row g-0">
    <div class="col-md-4" style="background:#5B8FB9; text-align:center;">
   <div style="margin:30px;display:inline-block"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"  viewBox="0 0 24 24" fill="white" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> 
      <p  style="color:white; font-size: 18px;margin: 5px;">{{$item->updated_at}}</p></div>
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <a href="/advertisements/{{$item->slug}}" style="color:black">  <h5 class="card-text" id="r2">{{$item->title}}</h5> </a>
      </div>
    </div>
  </div>
</div>

    @endforeach
  </div>
</div>
<Style>
  .wrapper{
    display: flex; width: 100%;
    height: 100%;justify-content: left;align-items:left;
    padding: 0% 10%;
    text-align: left;
  }
  #r2:hover{
        font-size:20px;
     opacity: 0.5;
     color:green; 

    }
 
  .cols{
    width: 90%;
  }
  h1{
    display: block;font-size: 72px;font-weight: 600;font-family: "Poppins";
  }
  .multiText{
    color: #5B8FB9;text-transform: capitalize;padding-left: 15px;
  }
  h2{
    display: block;padding-top: 20px;padding-left: 40px;font-size: 40px;
  }
  p{
    display: block;width: 90%;font-size: 1.2em;padding-left: 40px;font-family: "Comic Sans MS";;
  }
  #r1{
        color: white;font-weight: 500;font-size:18px;text-decoration:none;border-radius: 15px;  background:#5B8FB9;margin-left: 150px;padding-right: 30px;padding-left:30px;text-align: center;
    }
    #r1:hover{
     background: green;
     font-size:16px;
     opacity: 0.5;
    }
    #t1 {
  width: 100%;
  height: 50px;
  margin: 25px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}


div ul li {
  display: inline-block;
  margin-right: 30px;
 
}
div ul li a {
  display: inline-block;
  padding: 10px 20px;
  text-decoration: none;
  font-weight: 400;
  font-size: 16px;
  color: black;
 
}


#a1 {
  font-weight: 600;
  font-size:30px;
  margin-right: 150px;
  padding-right: 30px;
}
.image-container:hover .card-text {
    display:flex;
  }
  .image-container:hover .card-title {
    display: block;
  }
  .card-title {
    display: none;
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    padding: 5px;
    margin: 0;
  }
  #d{
    margin: 30px;
    background: #5B8FB9;
     margin-left:100px ;
     color: white;
     border-radius: 15px;
  }
  #d:hover{
    background:black;
  }
</Style>
<script src="https://unpkg.com/typed.js@2.0.132/dist/typed.umd.js"></script>
<script>
   var typingEffect=new Typed(".multiText",{
    strings:["User","Student","Supervisor"],
    loop:true,
    typeSpeed:100,
    backSpeed:80,
    backDelay:1500
   })
</script>
@endsection
@extends('layouts.app')

@section('content')

    <div class="content">

        <div class="container_user">
            <div class="user">
                <div class="name_user">
                    <div class="img"></div>
                    <h1>Lorenzo Calzi</h1>
                    <span>Studente presso Boolean Careers</span>
                </div>
        
                <div class="section">
                    <span>Collegamenti</span>
                    <h5>Espandi la tua rete</h5>
                </div>
    
                <div class="section">
                    <span>Accedi a strumenti e informazioni in esclusiva</span>
                    <h5>Prova Premium gratis</h5>
                </div>
    
                <div class="section save">
                    <i class="fas fa-bookmark"></i>
                    <h5>I miei elementi</h5>
                </div>
            </div>
        </div>
    
        <div class="posts">
            @foreach ($posts as $post)
                <div class="post">
                    <div class="content">
                        <div class="left">
                            <img src="{{$post->user_image}}" alt="">
                        </div>
                        <div class="right">
                            <h3>{{$post->user_name}}</h3>
                            <h5>{{$post->followers}} followers</h5>
                            <span>{{$post->publication_data}} ore • </span>
                            <span>{{$post->post_type}} • </span>
                            <i class="fas fa-globe-americas"></i>
                        </div>
                        
                    </div>
                    <div class="paragraph">
                        <p>{{$post->description}}</p>
                    </div>
    
                    <div class="image">
                        <img src="{{$post->post_image}}" alt="">
                    </div>
    
                    <div class="opinions">
                        <i class="far fa-thumbs-up"></i>
                        <i class="fas fa-sign-language"></i>
                        <i class="far fa-heart"></i>
                    </div>
    
                    <div class="share">
                        <i class="far fa-thumbs-up"> Consiglia</i>
                        <i class="far fa-comment"> Commenta</i>
                        <i class="fas fa-share"> Condividi</i>
                        <i class="far fa-paper-plane"> Invia</i>
                    </div>
    
                    <div class="comment">
                        <img src="{{$post->user_image}}" alt="">
    
                        <input type="text" name="" id="" placeholder="Aggiungi un commento...">
                    </div>
                </div>
            @endforeach

            <div>{{$posts->links()}}</div>
        </div>
    
        <div class="container_news">
            <div class="news">
                <h3>Linkedin Notizie</h3>
                <ul>
                    <div>
                        <li>Covid-19/Vaccini: il punto della situazione</li>
                        <span>Notizie principali • 8.490 lettori</span>
                    </div>
                    
                    <div>
                        <li>Anche se vuoi a volte non puoi</li>
                        <span>1 ora fa • 102 lettori</span>
                    </div>
                    
                    <div>
                        <li>Jeff Bezos nello spazio</li>
                        <span>4 ore fa • 296 lettori</span>
                    </div>
                    
                    <div>
                        <li>Riflessioni (professionali) della buonano...</li>
                        <span>1 giorno fa • 198 lettori</span>
                    </div>
                    
                    <div>
                        <li>Cosa dicono i professionisti sul ritorno i...</li>
                        <span>9 giorni fa • 1.128 lettori</span>
                    </div>
                </ul>
            </div>
        </div>
 
    </div>

@endsection
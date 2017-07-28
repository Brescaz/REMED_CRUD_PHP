@foreach($projets_in_blade as $one_projet)
	

<style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }


</style>

<div class="content">
                <div class="title m-b-md">
                    {{$one_projet->projet_name}}
                </div>

                <div class="links">
                    
                    ID projet :{{$one_projet->id}}
                    <br>
                    _________________________________
                    <br>
                    <br>
                    mail :{{$one_projet->mail}}
                    <br>
                    _________________________________
                    <br>
                    <br>
                    Contenu
                    <br>
                    _________________________________
                    <br><br>
					{{$one_projet->content}}
					
                    
                </div>
</div>

@endforeach
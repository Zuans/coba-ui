<style>
   

        .footer-container{
            display: grid;
            grid-template-colums: repeat(3, 1fr);
            grid-template-areas : 
                'home about contact'
                'copyright copyright year';
            width: 100%;
            min-height: 100px;
            background-color: rgb(90, 90, 90);
        }

        .home {
            grid-area: home;
            justify-self: center;
            font-family: Balsamiq;
        }

        .about {
            grid-area: about;
            justify-self: center; 
            font-family: Balsamiq;
        }

        .contact {
            grid-area : contact;
            justify-self: center; 
            font-family: Balsamiq;
        }

        .year{
            text-align: right;
            grid-area : year;
            font-weight: 500;
            background-color:rgb(70, 70, 70);
            width: 100%;
        }

        .footer-title {
            color: white;
            font-size: 2.5rem;
        }

        .copyright {
            grid-area : copyright;
            justify-self: left;
            color : rgb(105, 105, 105);
            font-weight: 500;
            background-color: rgb(70, 70, 70);
            width: 100%;
        }

        .copyright .fas-fa-heart {
            color: rgb(245, 1, 123);
        }

        ol li {
            list-style-type: none;
            text-align: inherit;
            font-size: 1rem;
            color: white;
        }

        .link {
            color: rgb(216, 216, 216);
            margin-left: 20px;
        }

</style>
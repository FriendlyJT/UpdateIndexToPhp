tailwind.config = {
    theme: {
        extend: {
            colors: {
                primary: '#0EC5D7',
                secondary: '#E18700 100%, #FF32AD 100%, #0EC5D7 100%',
            },
            fontFamily: {
                base: ['Nunito', 'sans-serif'],
                nav: ['Raleway', 'sans-serif']
            },
            fontSize: {
                'heading-1': '50px',
            },
            
            animation: {
                'spin-slow': 'spin 3s linear infinite',
              }
        },
       
    }
}
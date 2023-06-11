const txtAnim = document.querySelector('#head h1');

                var typewriter = new Typewriter(txtAnim, {
                    loop: true,
                    deleteSpeed: 20
                })

                typewriter.typeString('Tyrolium')
                .pauseFor(6000)
                .deleteAll()
                .typeString('Tyrolium')
                .pauseFor(6000)
                .deleteAll()
                .start();
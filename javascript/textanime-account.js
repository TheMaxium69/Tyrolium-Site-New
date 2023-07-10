const txtAnim = document.querySelector('#head c.change');

                var typewriter = new Typewriter(txtAnim, {
                    loop: true,
                    deleteSpeed: 20
                })

                typewriter.typeString('Tyrolium')
                .pauseFor(6000)
                .deleteAll()
                .typeString('Useritium')
                .pauseFor(6000)
                .deleteAll()
                .start();

    document.addEventListener('DOMContentLoaded', () => {
        const headings = [
            { id: 'heading01', duration: 2000, easing: 'ease' },
            { id: 'heading02', duration: 2500, easing: 'ease' },
            { id: 'heading03', duration: 3000, easing: 'ease' },
            { id: 'heading04', duration: 1500, easing: 'ease-in' }, 
            { id: 'heading05', duration: 1500, easing: 'ease-in' }, 
        ];

        headings.forEach(({ id, duration, easing }) => {
            const heading = document.querySelector(`#${id}`);
            let keyframes;
            if (id === 'heading04') {
                keyframes = {
                    opacity: [0, 1],
                    translate: ['100px', '0'], // 右からシュッと現れる
                };
            } else if (id === 'heading05') {
                keyframes = {
                    opacity: [0, 1],
                    translate: ['-100px', '0'], // 左からシュッと現れる
                };
            } else {
                keyframes = {
                    opacity: [0, 1],
                    translate: ['0 80px', 0],
                };
            }
            const options = {
                duration: duration,
                easing: easing,
            };
            heading.animate(keyframes, options);
        });
    });

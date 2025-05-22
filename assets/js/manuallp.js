
////////////////
//  トップ
////////////////
// ページリロード時のアニメーション実行
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

////////////////
//  制作の流れ(表示：右→左)
////////////////
// const images = document.querySelectorAll('.img-wrap');
// const animationClassName = 'img-animation';

// const observer = new IntersectionObserver((entries) => {
// entries.forEach((entry) => {
//     if (entry.isIntersecting) {
//     entry.target.classList.add(animationClassName);
//     } else {
//     entry.target.classList.remove(animationClassName);
//     }
// });
// });

// images.forEach((image) => {
// observer.observe(image);
// });

/////////////////
//  お悩み画像
/////////////////
// const items = document.querySelectorAll('.img-ask');

// const observer2 = new IntersectionObserver((entries) => {
//     entries.forEach((entry) => {
//         const index = Array.from(items).indexOf(entry.target); 
//         const keyframes = {
//             opacity: [0, 1] 
//         };
//         const options = {
//             duration: 1000,
//             delay: index * 1000, 
//             fill: 'forwards',
//         };

//         if (entry.isIntersecting) {
//             entry.target.classList.add('visible'); 
//             entry.target.animate(keyframes, options); 
//         } else {
//             entry.target.classList.remove('visible'); 
//             entry.target.style.opacity = 0; 
//         }
//     });
// });

// items.forEach((items) => {
//     observer2.observe(items);
// });
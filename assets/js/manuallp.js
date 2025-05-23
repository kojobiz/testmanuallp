// ナビゲーションのクリックイベントを最優先で処理
document.addEventListener('click', (e) => {
    const link = e.target.closest('a');
    if (link && link.href && !link.href.startsWith('#')) {
        // クリックイベントを最優先で処理
        e.stopPropagation();
        e.preventDefault();
        
        // 即座に遷移
        window.location.href = link.href;
    }
}, true); // キャプチャフェーズでイベントを処理



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
                translate: ['100px', '0'],
            };
        } else if (id === 'heading05') {
            keyframes = {
                opacity: [0, 1],
                translate: ['-100px', '0'],
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

/////////////////
//  コンテンツ表示スクロール発動
/////////////////
const animupItems = document.querySelectorAll('.animUp01, .animUp02');

const observer = new IntersectionObserver((entries, obs) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('is-visible');
      obs.unobserve(entry.target);
    }
  });
}, {
  threshold: 0.1
});

animupItems.forEach(item => observer.observe(item));





const AboutEducation = 'about-education';
const Advantages = 'advantages';
const Reviews = 'reviews';
const PricePolicy = 'price-policy';

const ref_range = [AboutEducation, Advantages, Reviews, PricePolicy];

function scrollToHeaderRef(ref) {
    let el = null;
    switch(ref) {
        case AboutEducation:
            el = document.querySelector('.about');
            break;
        case Advantages:
            el = document.querySelector('.advantages');
            break;
        case Reviews:
            el = document.querySelector('.reviews');
            break;
        case PricePolicy:
            el = document.querySelector('.price-politics');
            break;
        default:
            throw new Error();
    }
    if (el instanceof HTMLElement && header) {
        const rect = el.getBoundingClientRect();
        scrollTo(0, rect.top);
    }
}
function gotoPreviousPage() {
    history.back();
}

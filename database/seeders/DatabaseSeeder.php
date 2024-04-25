<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Products;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Products::create([
            'name' => 'Miss Dior Blooming Bouquet',
            'description' => 'Experience the timeless allure of Miss Dior Blooming Bouquet, a delicate and floral fragrance that captivates with its romantic and elegant notes.',
            'cover' => 'her1.jpg',
            'gender' => 'For Her',
            'price' => '185.00',
            'category' => 'perfume',
        ]);

        Products::create([
            'name' => 'Bvlgari Omnia Amethyste',
            'description' => 'Bvlgari Omnia Amethyste is a sophisticated scent that combines floral and woody accords, creating a mesmerizing aura of modern femininity.',
            'cover' => 'her2.jpg',
            'gender' => 'For Her',
            'price' => '185.00',
            'category' => 'perfume',
        ]);

        Products::create([
            'name' => 'Ariana Grande Cloud',
            'description' => 'Ariana Grande Cloud is a dreamy and enchanting fragrance, blending creamy notes with sweet marshmallow and indulgent coconut, for a scent that feels like a celestial embrace.',
            'cover' => 'her3.jpg',
            'gender' => 'For Her',
            'price' => '185.00',
            'category' => 'perfume',
        ]);

        Products::create([
            'name' => 'Lacoste Blanc',
            'description' => 'Lacoste Blanc is a clean and energizing fragrance that captures the spirit of pure confidence, blending citrus and herbal notes for a refreshing and sophisticated scent',
            'cover' => 'him1.jpg',
            'gender' => 'For Him',
            'price' => '185.00',
            'category' => 'perfume',
        ]);

        Products::create([
            'name' => 'Bleu de Chanel',
            'description' => 'Bleu de Chanel is a timeless and versatile fragrance, characterized by its fresh and invigorating notes, making it an ideal choice for the modern and confident man.',
            'cover' => 'him2.jpg',
            'gender' => 'For Him',
            'price' => '185.00',
            'category' => 'perfume',
        ]);

        Products::create([
            'name' => 'Christian Dior Sauvage',
            'description' => 'Experience the untamed allure of Christian Dior Sauvage, a magnetic fragrance that blends spicy and woody notes, leaving an impression of rugged elegance.',
            'cover' => 'him3.jpg',
            'gender' => 'For Him',
            'price' => '185.00',
            'category' => 'perfume',
        ]);

        Products::create([
            'name' => 'Le Labo Santal 33',
            'description' => 'Le Labo Santal 33 is a modern and distinctive scent, featuring woody and leathery accords that convey a sense of urban sophistication and individuality.',
            'cover' => 'unisex1.jpg',
            'gender' => 'Unisex',
            'price' => '185.00',
            'category' => 'perfume',
        ]);

        Products::create([
            'name' => 'Baccarat Rouge 540',
            'description' => 'Baccarat Rouge 540 is an opulent and luxurious fragrance, renowned for its unique combination of floral and oriental notes, creating an unforgettable olfactory experience.',
            'cover' => 'unisex2.jpg',
            'gender' => 'Unisex',
            'price' => '185.00',
            'category' => 'perfume',
        ]);

        Products::create([
            'name' => 'English Pear and Freesia',
            'description' => 'Embrace the classic elegance of English Pear and Freesia, a timeless fragrance that harmoniously blends the crisp freshness of pear with the delicate essence of freesia.',
            'cover' => 'unisex3.jpg',
            'gender' => 'Unisex',
            'price' => '185.00',
            'category' => 'perfume',
        ]);

        Products::create([
            'name' => 'Katy Perry Meow',
            'description' => 'Katy Perry Meow is a playful and flirtatious fragrance, featuring sweet and fruity notes that capture the essence of fun and femininity.',
            'cover' => 'her4.jpg',
            'gender' => 'For Her',
            'price' => '185.00',
            'category' => 'perfume',
        ]);

        Products::create([
            'name' => 'Victoria\'s Secret Pure Seduction',
            'description' => 'Indulge in the irresistible allure of Pure Seduction by Victoria\'s Secret, a sultry blend of fruits and florals that leaves a trail of seduction wherever you go.',
            'cover' => 'her1.jpg',
            'gender' => 'For Her',
            'price' => '185.00',
            'category' => 'perfume',
        ]);

        Products::create([
            'name' => 'Victoria\'s Secret Bombshell',
            'description' => 'Unleash your inner Bombshell with Victoria\'s Secret, a glamorous and alluring fragrance that combines floral and fruity notes for a seductive and confident aura.',
            'cover' => 'her2.jpg',
            'gender' => 'For Her',
            'price' => '185.00',
            'category' => 'perfume',
        ]);

        Products::create([
            'name' => 'Lacoste Red',
            'description' => 'Lacoste Red is a dynamic and energetic fragrance, combining fruity and spicy accords that embody the vibrant and daring spirit of the Lacoste man.',
            'cover' => 'him4.jpg',
            'gender' => 'For Him',
            'price' => '185.00',
            'category' => 'perfume',
        ]);

        Products::create([
            'name' => 'Versace Eros',
            'description' => 'Versace Eros is a passionate and seductive fragrance, featuring a combination of mint, vanilla, and cedarwood that creates an irresistible and masculine aura.',
            'cover' => 'him5.jpg',
            'gender' => 'For Him',
            'price' => '185.00',
            'category' => 'perfume',
        ]);

        Products::create([
            'name' => 'Davidoff Cool Water',
            'description' => 'Dive into the refreshing waves of Davidoff Cool Water, a timeless aquatic fragrance that evokes the coolness of the ocean breeze with its crisp and invigorating notes.',
            'cover' => 'him1.jpg',
            'gender' => 'For Him',
            'price' => '185.00',
            'category' => 'perfume',
        ]);

        Products::create([
            'name' => 'Cucumber Melon',
            'description' => 'Cucumber Melon is a light and refreshing fragrance that captures the essence of summer, blending the crispness of cucumber with the sweetness of juicy melon.',
            'cover' => 'unisex4.jpg',
            'gender' => 'Unisex',
            'price' => '185.00',
            'category' => 'perfume',
        ]);

        Products::create([
            'name' => 'Ethereal Essence',
            'description' => 'This scented alcohol exudes a delicate blend of citrus notes, infused with hints of jasmine and lavender. It\'s a refreshing and uplifting scent that evokes a sense of tranquility and elegance.',
            'cover' => 'alcohol1.jpg',
            'gender' => 'Unisex',
            'price' => '50.00',
            'category' => 'alcohol',
        ]);

        Products::create([
            'name' => 'Mystic Breeze',
            'description' => 'With a captivating aroma of fresh ocean mist and crisp greenery, Mystic Breeze transports you to a serene coastal paradise. Its invigorating scent is balanced with subtle floral undertones, creating a harmonious and enchanting experience.',
            'cover' => 'alcohol2.jpg',
            'gender' => 'Unisex',
            'price' => '50.00',
            'category' => 'alcohol',
        ]);

        Products::create([
            'name' => 'Aurora Aura',
            'description' => 'Embark on a sensory journey with Aurora Aura, a scented alcohol that combines the warm embrace of amber and vanilla with the spicy allure of cinnamon and nutmeg. Its intoxicating scent envelops you in a cozy and comforting ambiance, reminiscent of a crackling fireplace on a chilly evening.',
            'cover' => 'alcohol3.jpg',
            'gender' => 'Unisex',
            'price' => '50.00',
            'category' => 'alcohol',
        ]);

        Products::create([
            'name' => 'Celestial Citrus',
            'description' => 'Experience the vibrant burst of sunshine with Celestial Citrus, a zesty blend of tangy grapefruit, juicy mandarin, and ripe lemon. This invigorating scent uplifts the spirit and awakens the senses, leaving a trail of citrusy freshness wherever it goes.',
            'cover' => 'alcohol4.jpg',
            'gender' => 'Unisex',
            'price' => '65.00',
            'category' => 'alcohol',
        ]);

        Products::create([
            'name' => 'Soothing Vanilla Marshmallow',
            'description' => 'Illuminate your space with the soothing glow of this candle. Its warm and inviting fragrance fills the room with a comforting blend of vanilla bean and toasted marshmallow, creating a cozy atmosphere perfect for relaxation.',
            'cover' => 'candle1.jpg',
            'gender' => 'Unisex',
            'price' => '65.00',
            'category' => 'candle',
        ]);

        Products::create([
            'name' => 'Warm Cinnamon Cookie',
            'description' => 'Embark on a sensory journey with this candle. Delight in the enchanting aroma of freshly baked cookies straight from the oven, infused with notes of cinnamon and nutmeg. Let this irresistible scent transport you to a nostalgic haven of warmth and sweetness.',
            'cover' => 'candle2.jpg',
            'gender' => 'Unisex',
            'price' => '65.00',
            'category' => 'candle',
        ]);

        Products::create([
            'name' => 'Exotic Amber Spice',
            'description' => 'Indulge your senses with this candle, a luxurious blend of exotic spices and rich amber. Its alluring fragrance captivates with hints of sandalwood and patchouli, creating an ambiance of opulence and sophistication.',
            'cover' => 'candle3.jpg',
            'gender' => 'Unisex',
            'price' => '65.00',
            'category' => 'candle',
        ]);

        Products::create([
            'name' => 'Lavender Jasmine Serenity',
            'description' => 'Experience tranquility with this candle, a serene fusion of lavender fields and blooming jasmine. Let the delicate floral notes envelop you in a cloud of calmness, transporting you to a blissful oasis of relaxation.',
            'cover' => 'candle4.jpg',
            'gender' => 'Unisex',
            'price' => '65.00',
            'category' => 'candle',
        ]);

        Products::create([
            'name' => 'Fresh Rain Linen',
            'description' => 'Dive into a world of elegance with this candle, where the refreshing scent of crisp linen meets the invigorating aroma of fresh rain. Its clean and revitalizing fragrance rejuvenates the senses, leaving your space feeling airy and revitalized.',
            'cover' => 'candle5.jpg',
            'gender' => 'Unisex',
            'price' => '65.00',
            'category' => 'candle',
        ]);

        Products::create([
            'name' => 'Citrus Burst Energize',
            'description' => 'Ignite your senses with this candle, a tantalizing blend of juicy citrus and exotic fruits. Let the burst of mandarin orange and tropical pineapple awaken your spirit, filling the air with vibrant energy and zest.',
            'cover' => 'candle6.jpg',
            'gender' => 'Unisex',
            'price' => '65.00',
            'category' => 'candle',
        ]);

        Products::create([
            'name' => 'Earthy Woods Tranquility',
            'description' => 'Unwind with this candle, a harmonious fusion of earthy woods and aromatic herbs. Its soothing blend of cedarwood and sage creates a grounding atmosphere, perfect for moments of reflection and introspection.',
            'cover' => 'candle7.jpg',
            'gender' => 'Unisex',
            'price' => '65.00',
            'category' => 'candle',
        ]);

        Products::create([
            'name' => 'Velvety Vanilla Almond',
            'description' => 'Envelop yourself in luxury with this candle, a decadent combination of velvety vanilla and sweet almond. Its creamy fragrance indulges the senses, evoking the sensation of being wrapped in a soft cashmere blanket on a chilly evening.',
            'cover' => 'candle8.jpg',
            'gender' => 'Unisex',
            'price' => '65.00',
            'category' => 'candle',
        ]);

        Products::create([
            'name' => 'Tropical Sunset Escape',
            'description' => 'Transport yourself to a sun-drenched paradise with this candle, where the tropical scent of coconut and pineapple mingles with the sweet aroma of ripe mango. Let this exotic fragrance whisk you away to a paradise of sandy beaches and crystal-clear waters.',
            'cover' => 'candle9.jpg',
            'gender' => 'Unisex',
            'price' => '65.00',
            'category' => 'candle',
        ]);

        Products::create([
            'name' => 'Tranquil Lavender Dreams',
            'description' => 'Infuse your space with the calming aroma of lavender with this diffuser. Its soothing fragrance promotes relaxation and tranquility, creating a peaceful atmosphere for unwinding after a long day.',
            'cover' => 'diffuser1.JPG',
            'gender' => 'Unisex',
            'price' => '230.00',
            'category' => 'diffuser',
        ]);

        Products::create([
            'name' => 'Citrus Fresh Revitalize',
            'description' => 'Awaken your senses with the revitalizing scent of citrus with this diffuser. Its zesty fragrance energizes the mind and uplifts the spirit, perfect for boosting productivity and enhancing focus.',
            'cover' => 'diffuser2.JPG',
            'gender' => 'Unisex',
            'price' => '230.00',
            'category' => 'diffuser',
        ]);

        Products::create([
            'name' => 'Soothing Eucalyptus Mist',
            'description' => 'Experience the refreshing essence of eucalyptus with this diffuser. Its invigorating fragrance clears the airways and promotes easy breathing, ideal for creating a spa-like ambiance in your home.',
            'cover' => 'diffuser3.JPG',
            'gender' => 'Unisex',
            'price' => '230.00',
            'category' => 'diffuser',
        ]);

        Products::create([
            'name' => 'Vanilla Bean Comfort',
            'description' => 'Indulge in the comforting aroma of vanilla with this diffuser. Its warm and sweet fragrance creates a cozy atmosphere, evoking feelings of comfort and contentment.',
            'cover' => 'diffuser4.JPG',
            'gender' => 'Unisex',
            'price' => '230.00',
            'category' => 'diffuser',
        ]);

        Products::create([
            'name' => 'Refreshing Ocean Breeze',
            'description' => 'Bring the invigorating scent of the ocean into your space with this diffuser. Its crisp and clean fragrance fills the room with a refreshing breeze, reminiscent of a seaside retreat.',
            'cover' => 'diffuser5.JPG',
            'gender' => 'Unisex',
            'price' => '230.00',
            'category' => 'diffuser',
        ]);

        Products::create([
            'name' => 'Earthy Sandalwood Harmony',
            'description' => 'Immerse yourself in the grounding aroma of sandalwood with this diffuser. Its woody fragrance promotes balance and harmony, creating a peaceful environment for relaxation and meditation.',
            'cover' => 'diffuser6.JPG',
            'gender' => 'Unisex',
            'price' => '230.00',
            'category' => 'diffuser',
        ]);

        Products::create([
            'name' => 'Sweet Serenity Rose',
            'description' => 'Discover serenity with the delicate scent of rose in this diffuser. Its floral fragrance brings a sense of calm and tranquility to any space, allowing you to unwind and find peace amidst the chaos.',
            'cover' => 'diffuser7.JPG',
            'gender' => 'Unisex',
            'price' => '230.00',
            'category' => 'diffuser',
        ]);

        Products::create([
            'name' => 'Fresh Lemon Disinfectant',
            'description' => 'Experience the invigorating freshness of lemon while keeping your space clean with our Fresh Lemon Disinfectant. Its powerful formula eliminates 99.9% of germs, leaving behind a crisp citrus aroma.',
            'cover' => 'disinfectant1.JPG',
            'gender' => 'Unisex',
            'price' => '15.00',
            'category' => 'disinfectant',
        ]);

        Products::create([
            'name' => 'Eucalyptus Mint Disinfectant',
            'description' => 'Infuse your environment with the soothing scent of eucalyptus and mint while effectively disinfecting surfaces. Our Eucalyptus Mint Disinfectant combines germ-fighting power with a refreshing aroma.',
            'cover' => 'disinfectant2.JPG',
            'gender' => 'Unisex',
            'price' => '15.00',
            'category' => 'disinfectant',
        ]);

        Products::create([
            'name' => 'Ocean Breeze Disinfectant',
            'description' => 'Transport yourself to a coastal paradise with our Ocean Breeze Disinfectant. Its powerful cleaning action eliminates harmful bacteria, leaving behind a revitalizing oceanic fragrance.',
            'cover' => 'disinfectant3.JPG',
            'gender' => 'Unisex',
            'price' => '15.00',
            'category' => 'disinfectant',
        ]);

        Products::create([
            'name' => 'Lavender Fields Disinfectant',
            'description' => 'Relax and unwind in the soothing ambiance of lavender fields while ensuring a hygienic environment. Our Lavender Fields Disinfectant combines the calming scent of lavender with powerful disinfecting properties.',
            'cover' => 'disinfectant4.JPG',
            'gender' => 'Unisex',
            'price' => '15.00',
            'category' => 'disinfectant',
        ]);

        Products::create([
            'name' => 'Citrus Burst Disinfectant',
            'description' => 'Energize your space with the vibrant aroma of citrus while effectively killing germs and bacteria. Our Citrus Burst Disinfectant leaves surfaces sparkling clean and smelling fresh.',
            'cover' => 'disinfectant5.JPG',
            'gender' => 'Unisex',
            'price' => '15.00',
            'category' => 'disinfectant',
        ]);

        Products::create([
            'name' => 'Mountain Pine Disinfectant',
            'description' => 'Embrace the crisp scent of mountain pine while keeping your environment hygienic and clean. Our Mountain Pine Disinfectant combines the freshness of pine with powerful disinfecting action.',
            'cover' => 'disinfectant6.JPG',
            'gender' => 'Unisex',
            'price' => '15.00',
            'category' => 'disinfectant',
        ]);

        Products::create([
            'name' => 'Fresh Lavender Disinfectant',
            'description' => 'Experience the calming and floral scent of fresh lavender while ensuring a germ-free environment. Our Fresh Lavender Disinfectant combines effective disinfection with the soothing fragrance of lavender.',
            'cover' => 'disinfectant7.JPG',
            'gender' => 'Unisex',
            'price' => '15.00',
            'category' => 'disinfectant',
        ]);

        Products::create([
            'name' => 'Spring Blossom Disinfectant',
            'description' => 'Indulge in the delightful aroma of spring blossoms while maintaining a clean and hygienic space. Our Spring Blossom Disinfectant combines germ-fighting power with the scent of blooming flowers.',
            'cover' => 'disinfectant8.JPG',
            'gender' => 'Unisex',
            'price' => '15.00',
            'category' => 'disinfectant',
        ]);

        Products::create([
            'name' => 'Eucalyptus Vapor Inhaler',
            'description' => 'Clear your sinuses and breathe easier with our Eucalyptus Vapor Inhaler. Its natural eucalyptus vapor helps to relieve congestion and promote respiratory health, providing instant relief wherever you go.',
            'cover' => 'inhaler7.jpg',
            'gender' => 'Unisex',
            'price' => '10.00',
            'category' => 'inhaler',
        ]);

        Products::create([
            'name' => 'Peppermint Refresh Inhaler',
            'description' => 'Revitalize your senses and boost your energy with our Peppermint Refresh Inhaler. Its invigorating peppermint aroma provides a quick pick-me-up, enhancing alertness and mental clarity.',
            'cover' => 'inhaler1.jpg',
            'gender' => 'Unisex',
            'price' => '10.00',
            'category' => 'inhaler',
        ]);

        Products::create([
            'name' => 'Lavender Serenity Inhaler',
            'description' => 'Relax and unwind with our Lavender Serenity Inhaler. Its soothing lavender scent calms the mind and promotes relaxation, making it perfect for stress relief and bedtime.',
            'cover' => 'inhaler2.JPG',
            'gender' => 'Unisex',
            'price' => '10.00',
            'category' => 'inhaler',
        ]);

        Products::create([
            'name' => 'Citrus Burst Inhaler',
            'description' => 'Uplift your mood and refresh your senses with our Citrus Burst Inhaler. Its zesty citrus fragrance revitalizes the mind and body, providing an instant mood boost wherever you are.',
            'cover' => 'inhaler3.JPG',
            'gender' => 'Unisex',
            'price' => '10.00',
            'category' => 'inhaler',
        ]);

        Products::create([
            'name' => 'Rose Bliss Inhaler',
            'description' => 'Indulge in the luxurious scent of roses with our Rose Bliss Inhaler. Its floral fragrance evokes feelings of joy and tranquility, offering a moment of blissful relaxation in the midst of a hectic day.',
            'cover' => 'inhaler4.JPG',
            'gender' => 'Unisex',
            'price' => '10.00',
            'category' => 'inhaler',
        ]);

        Products::create([
            'name' => 'Sandalwood Harmony Inhaler',
            'description' => 'Find inner peace and balance with our Sandalwood Harmony Inhaler. Its warm and woody aroma promotes grounding and serenity, helping you to navigate through life\'s challenges with ease.',
            'cover' => 'inhaler5.JPG',
            'gender' => 'Unisex',
            'price' => '10.00',
            'category' => 'inhaler',
        ]);

        Products::create([
            'name' => 'Vanilla Comfort Inhaler',
            'description' => 'Wrap yourself in a cocoon of comfort with our Vanilla Comfort Inhaler. Its sweet and creamy vanilla scent creates a sense of warmth and coziness, offering a moment of solace during stressful times.',
            'cover' => 'inhaler2.JPG',
            'gender' => 'Unisex',
            'price' => '10.00',
            'category' => 'inhaler',
        ]);

        Products::create([
            'name' => 'Ocean Breeze Inhaler',
            'description' => 'Transport your senses to a tranquil seaside paradise with our Ocean Breeze Inhaler. Its fresh and crisp oceanic fragrance brings a breath of fresh air, providing instant relaxation and rejuvenation.',
            'cover' => 'inhaler8.JPG',
            'gender' => 'Unisex',
            'price' => '10.00',
            'category' => 'inhaler',
        ]);

        Products::create([
            'name' => 'Mint Eucalyptus Inhaler',
            'description' => 'Awaken your senses and promote respiratory wellness with our Mint Eucalyptus Inhaler. Its invigorating blend of mint and eucalyptus clears the airways and refreshes the mind, offering relief from congestion and fatigue.',
            'cover' => 'inhaler9.JPG',
            'gender' => 'Unisex',
            'price' => '10.00',
            'category' => 'inhaler',
        ]);

        Products::create([
            'name' => 'Lavender Essential Oil',
            'description' => 'Experience the calming and soothing effects of Lavender Essential Oil. Known for its relaxing properties, lavender oil is perfect for promoting sleep and reducing stress and anxiety.',
            'cover' => 'oil1.jpg',
            'gender' => 'Unisex',
            'price' => '20.00',
            'category' => 'essential_oil',
        ]);

        Products::create([
            'name' => 'Peppermint Essential Oil',
            'description' => 'Invigorate your senses with Peppermint Essential Oil. Its refreshing aroma provides relief from headaches, nausea, and congestion, while also boosting energy and mental alertness.',
            'cover' => 'oil2.jpg',
            'gender' => 'Unisex',
            'price' => '20.00',
            'category' => 'essential_oil',
        ]);

        Products::create([
            'name' => 'Tea Tree Essential Oil',
            'description' => 'Harness the natural antibacterial and antifungal properties of Tea Tree Essential Oil. Ideal for treating acne, skin infections, and minor cuts and scrapes, tea tree oil is a versatile addition to your skincare routine.',
            'cover' => 'oil3.jpg',
            'gender' => 'Unisex',
            'price' => '20.00',
            'category' => 'essential_oil',
        ]);

        Products::create([
            'name' => 'Eucalyptus Essential Oil',
            'description' => 'Clear your sinuses and promote respiratory health with Eucalyptus Essential Oil. Its camphorous aroma helps to alleviate congestion and coughs, making it a must-have during cold and flu season.',
            'cover' => 'oil4.jpg',
            'gender' => 'Unisex',
            'price' => '20.00',
            'category' => 'essential_oil',
        ]);

        Products::create([
            'name' => 'Lemon Essential Oil',
            'description' => 'Refresh and rejuvenate with Lemon Essential Oil. Its citrusy scent uplifts the mood and boosts energy, while also possessing antimicrobial properties that help to purify the air and surfaces in your home.',
            'cover' => 'oil5.jpg',
            'gender' => 'Unisex',
            'price' => '20.00',
            'category' => 'essential_oil',
        ]);

        Products::create([
            'name' => 'Frankincense Essential Oil',
            'description' => 'Experience the ancient healing powers of Frankincense Essential Oil. Revered for its spiritual and therapeutic properties, frankincense oil promotes relaxation, meditation, and overall well-being.',
            'cover' => 'oil1.jpg',
            'gender' => 'Unisex',
            'price' => '20.00',
            'category' => 'essential_oil',
        ]);

        Products::create([
            'name' => 'Rosemary Essential Oil',
            'description' => 'Boost cognitive function and improve memory with Rosemary Essential Oil. Its herbaceous aroma enhances focus and concentration, making it an ideal choice for studying or working.',
            'cover' => 'oil7.jpg',
            'gender' => 'Unisex',
            'price' => '20.00',
            'category' => 'essential_oil',
        ]);
        // php artisan db:seed
    }
}

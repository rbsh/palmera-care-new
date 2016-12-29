-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 29, 2016 at 02:23 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `palmera-care`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `item_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_desc` text COLLATE utf8_unicode_ci,
  `text` text COLLATE utf8_unicode_ci,
  `delivery_area` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price_1` double(8,2) NOT NULL,
  `dis_price_1` double(8,2) NOT NULL,
  `size_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qty_1` int(11) NOT NULL,
  `max_1` int(11) NOT NULL,
  `image_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price_2` double(8,2) DEFAULT NULL,
  `dis_price_2` double(8,2) DEFAULT NULL,
  `size_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qty_2` int(11) DEFAULT NULL,
  `max_2` int(11) DEFAULT NULL,
  `image_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price_3` double(8,2) DEFAULT NULL,
  `dis_price_3` double(8,2) DEFAULT NULL,
  `size_3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qty_3` int(11) DEFAULT NULL,
  `max_3` int(11) DEFAULT NULL,
  `image_3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price_4` double(8,2) DEFAULT NULL,
  `dis_price_4` double(8,2) DEFAULT NULL,
  `size_4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qty_4` int(11) DEFAULT NULL,
  `max_4` int(11) DEFAULT NULL,
  `image_4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tab_title_1` text COLLATE utf8_unicode_ci,
  `tab_title_2` text COLLATE utf8_unicode_ci,
  `tab_title_3` text COLLATE utf8_unicode_ci,
  `tab_title_4` text COLLATE utf8_unicode_ci,
  `tab_title_5` text COLLATE utf8_unicode_ci,
  `tab_title_6` text COLLATE utf8_unicode_ci,
  `tab_text_1` text COLLATE utf8_unicode_ci,
  `tab_text_2` text COLLATE utf8_unicode_ci,
  `tab_text_3` text COLLATE utf8_unicode_ci,
  `tab_text_4` text COLLATE utf8_unicode_ci,
  `tab_text_5` text COLLATE utf8_unicode_ci,
  `tab_text_6` text COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL,
  `row_order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `user_id`, `category_id`, `item_title`, `brand`, `short_desc`, `text`, `delivery_area`, `video`, `photo`, `price_1`, `dis_price_1`, `size_1`, `qty_1`, `max_1`, `image_1`, `price_2`, `dis_price_2`, `size_2`, `qty_2`, `max_2`, `image_2`, `price_3`, `dis_price_3`, `size_3`, `qty_3`, `max_3`, `image_3`, `price_4`, `dis_price_4`, `size_4`, `qty_4`, `max_4`, `image_4`, `tab_title_1`, `tab_title_2`, `tab_title_3`, `tab_title_4`, `tab_title_5`, `tab_title_6`, `tab_text_1`, `tab_text_2`, `tab_text_3`, `tab_text_4`, `tab_text_5`, `tab_text_6`, `status`, `row_order`, `created_at`, `updated_at`) VALUES
(1, 1, 45, 'Giovene Specialised Scar Formula', 'Giovene', 'Giovene dries to form a thin, transparent, flexible, gas-permeable and water-resistant silicone sheet which adheres to the skin.2 It is universally recognised that silicone gel occludes and hydrates the area of application, which helps to reduce the appearance of scars. Silicone gels are recommended as the current gold standard option for hypertrophic scars and keloids.3\r\n\r\n', 'Giovene Specialised Scar Formula:1\r\n\r\nNon-greasy\r\nDries quickly\r\nEasy to apply\r\nIs a clinically proven specialised scar formula\r\nSoftens, flattens and lightens scars, helping to reduce the appearance of the scar\r\nContains an innovative cyclic and polymeric siloxanes (CPX) technology\r\nHow can Giovene help reduce the appearance of scars?\r\n\r\nGiovene dries to form a thin, transparent, flexible, gas-permeable and water-resistant silicone sheet which adheres to the skin.2 It is universally recognised that silicone gel occludes and hydrates the area of application, which helps to reduce the appearance of scars. Silicone gels are recommended as the current gold standard option for hypertrophic scars and keloids.3\r\n\r\nWhen should Giovene be used?\r\n\r\nGiovene is a silicone gel and is applied as a thin layer over the closed wound.\r\nGiovene is suitable for use on scars that result from surgery or accidents (such as cuts, burns, scratches and abrasions) on the face and body.1\r\n\r\nHow long should I use Giovene for?\r\n\r\nInitial improvement in scars may be observed after 8 weeks of continued use.\r\nContinuous usage for 3-6 months is required to appreciate the full benefit of Giovene.1\r\n\r\nFeatures & benefits of Giovene scar formula1,2,4\r\n\r\nProduct Features\r\n\r\nNon-greasy\r\nOil free\r\nDries quickly\r\nWater resistant\r\nCompatible with cosmetics, moisturiser and sunscreen\r\nIs smooth upon application\r\nOdour free\r\nFunctional Benefits\r\n\r\nSoftens scars\r\nFlattens scars\r\nLightens scars\r\nMoisturises scars\r\nReduces the visible appearance of the scar\r\nReason to Believe\r\n\r\nGiovene contains an innovative cyclic and polymeric siloxanes (CPX) technology which improves the appearance of scars by softening, flattening and moisturising the scar.\r\n\r\nRecommended Use\r\n\r\nHypertrophic scars\r\nKeloid scars\r\nBurn scars\r\nScars on the face or body\r\nIngredients\r\n\r\nCyclic and polymeric siloxanes.\r\n\r\nAlways read the label. Use only as directed. If symptoms persist consult your healthcare professional.\r\n\r\n* Representation only. Individual results may vary.\r\n\r\nReferences: 1. Giovene Package Insert 2016 2. Mustoe T. Aesthetic Plast Surg. 2008;32:82-92 3. Meaume S, et al. Eur J Dermatol. 2014;24:435-443. 4. Yun IS, et al. Aesthetic Plast Surg. 2013;37:1176-1181', 'international', 'https://www.youtube.com/watch?v=EiJ40pLxNaI', 'uploads/2016-12-29/3173602b59c5494664e1ee6c507d16d6.jpeg', 90.00, 90.00, '15g', 100, 100, 'uploads/2016-12-29/3173602b59c5494664e1ee6c507d16d6.jpeg', 160.00, 120.00, '30g', 100, 100, 'uploads/2016-12-29/3173602b59c5494664e1ee6c507d16d6.jpeg', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, '', 'Product Description', 'Delivery', 'Return Policy', 'Payment Option', '', '', 'Giovene Specialised Scar Formula:1\r\n\r\nNon-greasy\r\nDries quickly\r\nEasy to apply\r\nIs a clinically proven specialised scar formula\r\nSoftens, flattens and lightens scars, helping to reduce the appearance of the scar\r\nContains an innovative cyclic and polymeric siloxanes (CPX) technology\r\nHow can Giovene help reduce the appearance of scars?\r\n\r\nGiovene dries to form a thin, transparent, flexible, gas-permeable and water-resistant silicone sheet which adheres to the skin.2 It is universally recognised that silicone gel occludes and hydrates the area of application, which helps to reduce the appearance of scars. Silicone gels are recommended as the current gold standard option for hypertrophic scars and keloids.3\r\n\r\nWhen should Giovene be used?\r\n\r\nGiovene is a silicone gel and is applied as a thin layer over the closed wound.\r\nGiovene is suitable for use on scars that result from surgery or accidents (such as cuts, burns, scratches and abrasions) on the face and body.1\r\n\r\nHow long should I use Giovene for?\r\n\r\nInitial improvement in scars may be observed after 8 weeks of continued use.\r\nContinuous usage for 3-6 months is required to appreciate the full benefit of Giovene.1\r\n\r\nFeatures & benefits of Giovene scar formula1,2,4\r\n\r\nProduct Features\r\n\r\nNon-greasy\r\nOil free\r\nDries quickly\r\nWater resistant\r\nCompatible with cosmetics, moisturiser and sunscreen\r\nIs smooth upon application\r\nOdour free\r\nFunctional Benefits\r\n\r\nSoftens scars\r\nFlattens scars\r\nLightens scars\r\nMoisturises scars\r\nReduces the visible appearance of the scar\r\nReason to Believe\r\n\r\nGiovene contains an innovative cyclic and polymeric siloxanes (CPX) technology which improves the appearance of scars by softening, flattening and moisturising the scar.\r\n\r\nRecommended Use\r\n\r\nHypertrophic scars\r\nKeloid scars\r\nBurn scars\r\nScars on the face or body\r\nIngredients\r\n\r\nCyclic and polymeric siloxanes.\r\n\r\nAlways read the label. Use only as directed. If symptoms persist consult your healthcare professional.\r\n\r\n* Representation only. Individual results may vary.\r\n\r\nReferences: 1. Giovene Package Insert 2016 2. Mustoe T. Aesthetic Plast Surg. 2008;32:82-92 3. Meaume S, et al. Eur J Dermatol. 2014;24:435-443. 4. Yun IS, et al. Aesthetic Plast Surg. 2013;37:1176-1181', 'Orders within Australia – Regular Post\r\n\r\nOrders will be delivered by Australia Post.\r\n\r\n$8.95 for orders weighing less than 3kg\r\n\r\n$13.00 for orders weighing more than 3kg\r\n\r\nDelivery is FREE if your order is over $149 and weighing less than 3kg.\r\n\r\nExtremely heavy parcels may incur additional postage costs. We will contact you prior to dispatch if this is applicable to your order.\r\n\r\nOrders within Australia – Express Post\r\n\r\nExpress Post is available for orders under 500g at a cost of $11.95 and between 501g – 3kg for $19.95. If your order qualifies for Express Post, this will be offered at checkout.\r\n\r\nOrders outside Australia\r\n\r\nInternational orders will be dispatched via Airmail. Please allow up to 14 days for international Airmail delivery.\r\n\r\nShipping costs depend on the order weight and destination country. Once you have added the products you require to your shopping basket, select your country from the dropdown list and the shipping cost will be displayed.', 'We hope that you will be delighted with your order. However, if for any reason you are not completely satisfied then please contact us within 7 days of receipt of your parcel, and our customer service team will be pleased to assist you with organising a return authorisation. All returned merchandise must arrive back to us in their original, unopened and unused condition.', 'We accept credit cards and PayPal:\r\n\r\n* Visa\r\n* MasterCard\r\n* American Express\r\n* PayPal\r\n\r\nFor your peace of mind, credit card information does not pass through or stored on our servers. Once you pay for your order, your credit card details are encrypted and processed through the our PCI-Compliant Payment Gateway.', '', '', 1, 1, '2016-12-29 03:16:06', '2016-12-29 04:33:42'),
(2, 1, 51, 'Blistex Lip Balm Conditioning', 'SPF', 'before they start. Use Blistex Lip Conditioner daily for healthy lips, or use Lip Conditioning Balm if you prefer a stick or Daily Conditioning Therapy if you prefer a tube.\n', 'Daily care for soft, smooth lips\r\n\r\n* High protection sunscreen\r\n* Conditions, relieves and protects from sun, wind and cold\r\n\r\nLip Tips - How To Use Lip Care Daily\r\n\r\nUse a lip care product as part of your everyday routine. General upkeep stops problems\r\nbefore they start. Use Blistex Lip Conditioner daily for healthy lips, or use Lip Conditioning Balm if you prefer a stick or Daily Conditioning Therapy if you prefer a tube.\r\n\r\nProtect your lips from drying out\r\n\r\nAn ounce of prevention is worth a pound of cure. You can keep your lips from going dry by sealing\r\nin the moisture with Blistex Complete Moisture.\r\n\r\nProtect your lips from the sun\r\n\r\nLips are sensitive to the sun''s harmful rays. They need protection. Use a product with the right SPF\r\n(Sun Protection Factor) to help prevent damage. There are many to choose from –\r\nBlistex Lip Conditioner SPF 20, Lip Conditioning Balm SPF 20, Ultra Lip Balm SPF 30+\r\nand Clear Advance SPF 30+.\r\n\r\nRELIEVE sore or chapped lips with a medicated lip care product\r\n\r\nIf you already have dry or sore lips, it is especially important to use a medicated product to help\r\nprovide relief. Blistex Lip Ointment is what the doctor ordered.', 'local', 'https://www.youtube.com/watch?v=oq_-oUbh9QE', 'uploads/2016-12-29/03a8cc4a4f6f3c06575c06519f2eac84.jpeg', 10.00, 8.00, '4.25g', 300, 200, 'uploads/2016-12-29/03a8cc4a4f6f3c06575c06519f2eac84.jpeg', 32.00, 20.00, '10g', 50, 50, 'uploads/2016-12-29/03a8cc4a4f6f3c06575c06519f2eac84.jpeg', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, '', 'Product Description', 'Delivery', 'Return Policy', 'Payment Option', '', '', 'Daily care for soft, smooth lips\r\n\r\n* High protection sunscreen\r\n* Conditions, relieves and protects from sun, wind and cold\r\n\r\nLip Tips - How To Use Lip Care Daily\r\n\r\nUse a lip care product as part of your everyday routine. General upkeep stops problems\r\nbefore they start. Use Blistex Lip Conditioner daily for healthy lips, or use Lip Conditioning Balm if you prefer a stick or Daily Conditioning Therapy if you prefer a tube.\r\n\r\nProtect your lips from drying out\r\n\r\nAn ounce of prevention is worth a pound of cure. You can keep your lips from going dry by sealing\r\nin the moisture with Blistex Complete Moisture.\r\n\r\nProtect your lips from the sun\r\n\r\nLips are sensitive to the sun''s harmful rays. They need protection. Use a product with the right SPF\r\n(Sun Protection Factor) to help prevent damage. There are many to choose from –\r\nBlistex Lip Conditioner SPF 20, Lip Conditioning Balm SPF 20, Ultra Lip Balm SPF 30+\r\nand Clear Advance SPF 30+.\r\n\r\nRELIEVE sore or chapped lips with a medicated lip care product\r\n\r\nIf you already have dry or sore lips, it is especially important to use a medicated product to help\r\nprovide relief. Blistex Lip Ointment is what the doctor ordered.', 'Orders within Australia – Regular Post\r\n\r\nOrders will be delivered by Australia Post.\r\n\r\n$8.95 for orders weighing less than 3kg\r\n\r\n$13.00 for orders weighing more than 3kg\r\n\r\nDelivery is FREE if your order is over $149 and weighing less than 3kg.\r\n\r\nExtremely heavy parcels may incur additional postage costs. We will contact you prior to dispatch if this is applicable to your order.\r\n\r\nOrders within Australia – Express Post\r\n\r\nExpress Post is available for orders under 500g at a cost of $11.95 and between 501g – 3kg for $19.95. If your order qualifies for Express Post, this will be offered at checkout.\r\n\r\nOrders outside Australia\r\n\r\nInternational orders will be dispatched via Airmail. Please allow up to 14 days for international Airmail delivery.\r\n\r\nShipping costs depend on the order weight and destination country. Once you have added the products you require to your shopping basket, select your country from the dropdown list and the shipping cost will be displayed.', 'We hope that you will be delighted with your order. However, if for any reason you are not completely satisfied then please contact us within 7 days of receipt of your parcel, and our customer service team will be pleased to assist you with organising a return authorisation. All returned merchandise must arrive back to us in their original, unopened and unused condition.', 'We accept credit cards and PayPal:\r\n\r\n* Visa\r\n* MasterCard\r\n* American Express\r\n* PayPal\r\n\r\nFor your peace of mind, credit card information does not pass through or stored on our servers. Once you pay for your order, your credit card details are encrypted and processed through the our PCI-Compliant Payment Gateway.', '', '', 1, 1, '2016-12-29 03:21:50', '2016-12-29 03:21:50'),
(3, 1, 51, 'Nivea Lip Care Strawberry', 'Nivea', 'NIVEA Lip Care Strawberry provides daily protection with a fresh fruity flavour and shiny colour', 'NIVEA Lip Care Strawberry provides daily protection with a fresh fruity flavour and shiny colour\r\n\r\nThe special caring formula with Almond Oil, Jojoba oil and Shea Butter:\r\n\r\n* Pampers your lips with effective care. \r\n* Gives your lips a fresh yummy taste and subtle red sheen.', 'local', '', 'uploads/2016-12-29/7c8f3fe4fa6ac20a998c3c90f6aaefe0.jpeg', 12.00, 12.00, '4.8g', 100, 100, '', 34.00, 34.00, '25g', 30, 30, 'uploads/2016-12-29/7c8f3fe4fa6ac20a998c3c90f6aaefe0.jpeg', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, '', 'Product Description', 'Delivery', 'Return Policy', 'Payment Option', '', '', 'NIVEA Lip Care Strawberry provides daily protection with a fresh fruity flavour and shiny colour\r\n\r\nThe special caring formula with Almond Oil, Jojoba oil and Shea Butter:\r\n\r\n* Pampers your lips with effective care. \r\n* Gives your lips a fresh yummy taste and subtle red sheen.', 'Orders within Australia – Regular Post\r\n\r\nOrders will be delivered by Australia Post.\r\n\r\n$8.95 for orders weighing less than 3kg\r\n\r\n$13.00 for orders weighing more than 3kg\r\n\r\nDelivery is FREE if your order is over $149 and weighing less than 3kg.\r\n\r\nExtremely heavy parcels may incur additional postage costs. We will contact you prior to dispatch if this is applicable to your order.\r\n\r\nOrders within Australia – Express Post\r\n\r\nExpress Post is available for orders under 500g at a cost of $11.95 and between 501g – 3kg for $19.95. If your order qualifies for Express Post, this will be offered at checkout.\r\n\r\nOrders outside Australia\r\n\r\nInternational orders will be dispatched via Airmail. Please allow up to 14 days for international Airmail delivery.\r\n\r\nShipping costs depend on the order weight and destination country. Once you have added the products you require to your shopping basket, select your country from the dropdown list and the shipping cost will be displayed.', 'We hope that you will be delighted with your order. However, if for any reason you are not completely satisfied then please contact us within 7 days of receipt of your parcel, and our customer service team will be pleased to assist you with organising a return authorisation. All returned merchandise must arrive back to us in their original, unopened and unused condition.', 'We accept credit cards and PayPal:\r\n\r\n* Visa\r\n* MasterCard\r\n* American Express\r\n* PayPal\r\n\r\nFor your peace of mind, credit card information does not pass through or stored on our servers. Once you pay for your order, your credit card details are encrypted and processed through the our PCI-Compliant Payment Gateway.', '', '', 1, 1, '2016-12-29 03:26:09', '2016-12-29 03:44:48'),
(4, 1, 42, 'Olay Regenerist Luminous', 'Olay', 'Delivers both chronic and acute discoloration benefits (active ingredients NaG, Niacinamide and TiO2).', 'Main Product Attributes\r\n\r\n\r\n• Delivers both chronic and acute discoloration benefits (active ingredients NaG, Niacinamide and TiO2).\r\n\r\n\r\n• Silicone in water formula with 10% glycerin for hydration benefits\r\n\r\n• Unique peach product appearance drives consumer delight, POD and acute improvements', 'international', 'https://www.youtube.com/watch?v=nIVeVaaA6Iw', 'uploads/2016-12-29/db8ef4dec938394543051994f77a045d.jpeg', 198.00, 160.00, '48g', 15, 20, 'uploads/2016-12-29/db8ef4dec938394543051994f77a045d.jpeg', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, '', 'Product Description', 'Delivery', 'Return Policy', 'Payment Option', '', '', 'Main Product Attributes\r\n\r\n\r\n• Delivers both chronic and acute discoloration benefits (active ingredients NaG, Niacinamide and TiO2).\r\n\r\n\r\n• Silicone in water formula with 10% glycerin for hydration benefits\r\n\r\n• Unique peach product appearance drives consumer delight, POD and acute improvements', 'Orders within Australia – Regular Post\r\n\r\nOrders will be delivered by Australia Post.\r\n\r\n$8.95 for orders weighing less than 3kg\r\n\r\n$13.00 for orders weighing more than 3kg\r\n\r\nDelivery is FREE if your order is over $149 and weighing less than 3kg.\r\n\r\nExtremely heavy parcels may incur additional postage costs. We will contact you prior to dispatch if this is applicable to your order.\r\n\r\nOrders within Australia – Express Post\r\n\r\nExpress Post is available for orders under 500g at a cost of $11.95 and between 501g – 3kg for $19.95. If your order qualifies for Express Post, this will be offered at checkout.\r\n\r\nOrders outside Australia\r\n\r\nInternational orders will be dispatched via Airmail. Please allow up to 14 days for international Airmail delivery.\r\n\r\nShipping costs depend on the order weight and destination country. Once you have added the products you require to your shopping basket, select your country from the dropdown list and the shipping cost will be displayed.', 'We hope that you will be delighted with your order. However, if for any reason you are not completely satisfied then please contact us within 7 days of receipt of your parcel, and our customer service team will be pleased to assist you with organising a return authorisation. All returned merchandise must arrive back to us in their original, unopened and unused condition.', 'We accept credit cards and PayPal:\r\n\r\n* Visa\r\n* MasterCard\r\n* American Express\r\n* PayPal\r\n\r\nFor your peace of mind, credit card information does not pass through or stored on our servers. Once you pay for your order, your credit card details are encrypted and processed through the our PCI-Compliant Payment Gateway.', '', '', 1, 1, '2016-12-29 04:09:35', '2016-12-29 04:09:35'),
(5, 1, 42, 'Palmer''s Cocoa Butter', 'Palmer', 'For a rich, overnight repair treatment, Palmer''s Moisture Rich Night Cream is just the thing. It moisturizes with all the goodness of Cocoa Butter, nature''s super ingredient & contains Retinol and Vitamin E to promote softer, smoother, younger looking skin. With the added goodness of peptides to protect cell structure, this nourishing Night Cream is an essential to your daily routine.\r\n\r\n', 'For a rich, overnight repair treatment, Palmer''s Moisture Rich Night Cream is just the thing. It moisturizes with all the goodness of Cocoa Butter, nature''s super ingredient & contains Retinol and Vitamin E to promote softer, smoother, younger looking skin. With the added goodness of peptides to protect cell structure, this nourishing Night Cream is an essential to your daily routine.\r\n\r\n\r\nACTIVE INGREDIENTS\r\n\r\n• Cocoa Butter - Ethically sourced from the cacoa tree, Palmer''s Cocoa Butter is loaded with powerful antioxidants vitamins A, B1, B2, B3, C and E, flavonoids and the unique Cocoa Mass Polyphenol to fight free radicals and help skin perform to its beautiful best. It moisturizes by bonding with the natural oils in your skin, giving a super powerful drenching with each application.\r\n\r\n\r\n• Peptide Complex.\r\n\r\n\r\n• Vitamins A, B1, B2, B3, C and E.\r\n\r\n\r\n• Retinol.\r\n\r\n\r\n• Aloe.', 'local', '', 'uploads/2016-12-29/ddf74f1b8ea24ce30b53760c8370572b.jpeg', 38.00, 38.00, '75g', 100, 200, 'uploads/2016-12-29/ddf74f1b8ea24ce30b53760c8370572b.jpeg', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, '', 'Product Description', 'Delivery', 'Return Policy', 'Payment Option', '', '', 'For a rich, overnight repair treatment, Palmer''s Moisture Rich Night Cream is just the thing. It moisturizes with all the goodness of Cocoa Butter, nature''s super ingredient & contains Retinol and Vitamin E to promote softer, smoother, younger looking skin. With the added goodness of peptides to protect cell structure, this nourishing Night Cream is an essential to your daily routine.\r\n\r\n\r\nACTIVE INGREDIENTS\r\n\r\n• Cocoa Butter - Ethically sourced from the cacoa tree, Palmer''s Cocoa Butter is loaded with powerful antioxidants vitamins A, B1, B2, B3, C and E, flavonoids and the unique Cocoa Mass Polyphenol to fight free radicals and help skin perform to its beautiful best. It moisturizes by bonding with the natural oils in your skin, giving a super powerful drenching with each application.\r\n\r\n\r\n• Peptide Complex.\r\n\r\n\r\n• Vitamins A, B1, B2, B3, C and E.\r\n\r\n\r\n• Retinol.\r\n\r\n\r\n• Aloe.', 'Orders within Australia – Regular Post\r\n\r\nOrders will be delivered by Australia Post.\r\n\r\n$8.95 for orders weighing less than 3kg\r\n\r\n$13.00 for orders weighing more than 3kg\r\n\r\nDelivery is FREE if your order is over $149 and weighing less than 3kg.\r\n\r\nExtremely heavy parcels may incur additional postage costs. We will contact you prior to dispatch if this is applicable to your order.\r\n\r\nOrders within Australia – Express Post\r\n\r\nExpress Post is available for orders under 500g at a cost of $11.95 and between 501g – 3kg for $19.95. If your order qualifies for Express Post, this will be offered at checkout.\r\n\r\nOrders outside Australia\r\n\r\nInternational orders will be dispatched via Airmail. Please allow up to 14 days for international Airmail delivery.\r\n\r\nShipping costs depend on the order weight and destination country. Once you have added the products you require to your shopping basket, select your country from the dropdown list and the shipping cost will be displayed.', 'We hope that you will be delighted with your order. However, if for any reason you are not completely satisfied then please contact us within 7 days of receipt of your parcel, and our customer service team will be pleased to assist you with organising a return authorisation. All returned merchandise must arrive back to us in their original, unopened and unused condition.\r\n\r\n', '\r\nWe accept credit cards and PayPal:\r\n\r\n* Visa\r\n* MasterCard\r\n* American Express\r\n* PayPal\r\n\r\nFor your peace of mind, credit card information does not pass through or stored on our servers. Once you pay for your order, your credit card details are encrypted and processed through the our PCI-Compliant Payment Gateway.\r\n\r\n', '', '', 1, 1, '2016-12-29 04:13:18', '2016-12-29 04:13:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

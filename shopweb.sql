-- MySQL dump 10.13  Distrib 8.0.40, for Win64 (x86_64)
--
-- Host: localhost    Database: users_schema
-- ------------------------------------------------------
-- Server version	8.0.40

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `banner`
--

DROP TABLE IF EXISTS `banner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `banner` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banner`
--

LOCK TABLES `banner` WRITE;
/*!40000 ALTER TABLE `banner` DISABLE KEYS */;
INSERT INTO `banner` VALUES (1,'1','https://www.shutterstock.com/image-vector/11-super-sale-promo-banner-260nw-2536043191.jpg'),(2,'2','https://png.pngtree.com/png-vector/20220213/ourmid/pngtree-mega-sale-20-off-png-image_4387013.png'),(3,'3','https://png.pngtree.com/png-vector/20190521/ourlarge/pngtree-classic-big-sale-discount-label-with-stroke-illustration-png-image_1055868.jpg'),(4,'4','https://img.lovepik.com/original_origin_pic/18/06/08/826f808b481600a21c4cd99ab1447b12.png_wh860.png'),(5,'5','https://png.pngtree.com/png-vector/20200320/ourmid/pngtree-special-offer-sale-50-off-red-tag-discount-offer-price-label-png-image_2163244.jpg');
/*!40000 ALTER TABLE `banner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `productname` varchar(45) NOT NULL,
  `category` enum('shirt','pant','hat') NOT NULL,
  `price` int NOT NULL,
  `detail` varchar(100) DEFAULT NULL,
  `urlimage` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `name_UNIQUE` (`productname`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Basic T-Shirt','shirt',150,'Plain cotton t-shirt','https://images.tokopedia.net/img/cache/700/hDjmkQ/2024/1/14/eebcdfee-77ae-432a-b07a-b3dc598274fa.jpg'),(2,'Stylish Hat','hat',120,'A stylish sun hat','https://cdn.shopify.com/s/files/1/2136/7631/products/BTS_Pierced_Cap_900x.jpg'),(3,'Formal Pants','pant',300,'Office wear formal pants','https://i.pinimg.com/736x/1a/48/e3/1a48e3f37078020e72bd45c8891c0729.jpg'),(4,'Graphic Tee','shirt',200,'T-shirt with graphic print','https://www.kpop.exchange/cdn/shop/files/Sb9a93ed444eb4592b9bc6feded313ec8s.webp?v=1711194927'),(5,'Winter Hat','hat',100,'Warm woolen hat for winter','https://i.pinimg.com/originals/1a/50/62/1a506208c40bc803ef1f7f331b7bf6a3.jpg'),(6,'Casual Pants','pant',250,'Comfortable casual pants','https://s1.aptocdn.com/www.fashionchingu.com/wp-content/uploads/2022/05/Taehyung-BTS-Beige-Suit-Pants-2.jpg'),(7,'Designer Shirt','shirt',500,'Designer cotton shirt','https://kpop2u-unnie.com/cdn/shop/products/Screenshot_20220618-182559_Instagram.jpg?v=1655595496'),(8,'Sport Cap','hat',130,'Lightweight sports cap','https://img.drz.lazcdn.com/static/bd/p/c8079fe43b4cece60e56a555be3793b9.jpg_720x720q80.jpg'),(9,'Jeans','pant',400,'Slim fit denim jeans','https://pos.nvncdn.com/2865a9-85186/ps/20231129_aNL7o9qQRN.jpeg'),(10,'Flannel Shirt','shirt',180,'Casual flannel shirt','https://i.pinimg.com/736x/8d/d6/0f/8dd60fbf28729562bb04f2781eca1928.jpg'),(11,'Cool T-Shirt','shirt',180,'Stylish cotton t-shirt','https://cdnx.jumpseller.com/truestudio/image/49103658/resize/1000/1000?1716670888'),(12,'Classic Hat','hat',110,'Elegant hat for summer','https://i.ebayimg.com/images/g/uSoAAOSwmxBitHsF/s-l1200.jpg'),(13,'Cargo Pants','pant',350,'Durable cargo pants','https://pbs.twimg.com/media/D3Xbl7QXsAAtzhW.jpg'),(14,'Casual Tee','shirt',190,'Comfortable casual t-shirt','https://down-th.img.susercontent.com/file/sg-11134201-7qvfb-lhreim8ejy2169'),(15,'Bucket Hat','hat',140,'Trendy bucket hat','https://ae01.alicdn.com/kf/Sd065b534452147bf860222ef292185ccg.jpg'),(16,'Chino Pants','pant',320,'Modern chino pants','https://pbs.twimg.com/media/Db3leBRXcAUsthM.jpg'),(17,'Polo Shirt','shirt',240,'Premium polo shirt','https://i.pinimg.com/1200x/d3/3b/76/d33b762fb188aaebf334d181db5cb01d.jpg'),(18,'Fedora Hat','hat',160,'Classic fedora hat','https://kpopmerchshop.com/wp-content/uploads/2023/04/93d69a8fc668c87cf4b037cab4e93011.jpeg'),(19,'Slim Fit Jeans','pant',420,'Stylish slim fit jeans','https://img.vuahanghieu.com/unsafe/0x0/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/news/content/2023/04/jungkook-calvin-klein-2-jpg-1680597569-04042023153929.jpg'),(20,'Linen Shirt','shirt',260,'Lightweight linen shirt','https://pbs.twimg.com/media/Eds2vnGXkAADPTZ.png');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  `dayofbirth` date DEFAULT NULL,
  `gender` enum('Nam','Nữ','Khác') DEFAULT NULL,
  `phonenumber` varchar(45) DEFAULT NULL,
  `vip` enum('vip','không') DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`fullname`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin','$2y$10$kKXi56hlEfop55edvGUrKefbH7eUpIhnDZVMGG4TZwhK/ZyQRwMFO','2003-11-10','Nam','0111111111','vip'),(2,'Nguyen Van A','nguyenvana','$2y$10$1234567890abcdefghij1234567890abcdefghij','2000-01-15','Nam','0912345678','vip'),(3,'Tran Thi B','tranthib','$2y$10$abcdefghij1234567890abcdefghij1234567890','1998-03-22','Nữ','0987654321','không'),(4,'Le Van C','levanc','$2y$10$abcdefgh1234567890abcdefgh1234567890','2002-07-30','Nam','0934567890','vip'),(5,'Hoang Thi D','hoangthid','$2y$10$12345abcdefgh67890abcdefghij1234567890','2001-12-05','Nữ','0923456789','không'),(6,'Pham Van E','phamvane','$2y$10$abcdefghij12345abcdefghij1234567890abcd','1999-11-01','Khác','0945678901','vip'),(7,'Nguyen Thi C','nguyenthic','123456','1995-05-18','Nữ','0931112233','vip'),(8,'Pham Van D','phamvand','abcdef','1997-09-10','Nam','0922233445','không'),(9,'Tran Thi E','tranthie','password','2000-03-25','Nữ','0915566778','vip'),(10,'Le Van F','levanf','123abc','2003-11-15','Nam','0934455667','không'),(11,'Hoang Minh G','hoangminhg','minh123','2001-07-12','Nam','0987766554','vip'),(12,'Nguyen Hoai H','nguyenhoaih','hoai456','1998-12-08','Nữ','0976655443','không'),(13,'Pham Thien I','phamthieni','thien789','1999-06-22','Nam','0965544332','vip'),(14,'Tran Ngoc J','tranngocj','ngocabc','2002-01-01','Nữ','0954433221','không'),(15,'Vo Thi K','vothik','vothi123','1996-04-04','Nữ','0943322110','vip'),(16,'Le Quang L','lequangl','quang456','1994-09-09','Nam','0932211009','không');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-12-30 22:23:13

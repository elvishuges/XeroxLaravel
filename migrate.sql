     create table `users` (`id` int unsigned not null auto_increment primary key, `name` varchar(191) not null, `sobreNome` varchar(191) not null, `email` varchar(191) not null, `password` varchar(191) not null, `remember_token` varchar(100) null, `created_at` timestamp null, `updated_at` timestamp null) default character set utf8mb4 collate utf8mb4_unicode_ci
 alter table `users` add unique `users_email_unique`(`email`)
 create table `password_resets` (`email` varchar(191) not null, `token` varchar(191) not null, `created_at` timestamp null) default character set utf8mb4 collate utf8mb4_unicode_ci
 alter table `password_resets` add index `password_resets_email_index`(`email`)
 alter table `password_resets` add index `password_resets_token_index`(`token`)
 create table `xeroxes` (`id` int unsigned not null auto_increment primary key, `nome` varchar(191) not null, `descricao` text not null, `precoFolha` double(8, 2) not null, `user_id` int not null, `created_at` timestamp null, `updated_at` timestamp null) default character set utf8mb4 collate utf8mb4_unicode_ci
 alter table `xeroxes` add constraint `xeroxes_user_id_foreign` foreign key (`user_id`) references `users` (`id`)
 create table `arquivos` (`id` int unsigned not null auto_increment primary key, `status` tinyint(1) not null default '0', `nome` varchar(191) not null, `nomeXerox` varchar(191) not null, `hash` varchar(191) not null, `dataDeBusca` varchar(191) not null, `user_id` int not null, `xeroxes_id` int not null, `created_at` timestamp null, `updated_at` timestamp null) default character set utf8mb4 collate utf8mb4_unicode_ci
 alter table `arquivos` add constraint `arquivos_user_id_foreign` foreign key (`user_id`) references `users` (`id`)
 alter table `arquivos` add constraint `arquivos_xeroxes_id_foreign` foreign key (`xeroxes_id`) references `xeroxes` (`id`)

<?php
namespace App\Enums;

enum Role: int {
    case SuperAdministrator = 1;
    case Moderator = 2;
    case DeliveryCoordinator = 3;
    case SellerSupportManager = 4;
    case Customer = 5;
}

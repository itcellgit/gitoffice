<?php
namespace App\Enums;


enum UserRoles: string
{
    case TEACHING = 'teaching';
    case NONTEACHING = 'non-teaching';
    case STUDENT = 'student';
    case SU = "Super Admin";
    case ADMIN = "Admin";
    case ADMISSION = "Admission";
    case ACCOUNTS = "Accounts";
    case ESTB = "Establishment";
    case OS = "Office Superintendent";
    case HOD = "Head of Department";
    case DEAN = "Dean";
    case DEANRND ="Deanrnd";
    case EGOV_ADMIN="egov_admin";
    case PRINCIPAL_OFFICE="principal_office";
    case EXAM_SECTION="Exam_section";
    case Dean_admin = "Dean_admin";
    case PRINCIPAL = "Principal";
    
}
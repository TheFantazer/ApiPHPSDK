<?php

/**
 * Configurations of Api.
 *
 * @version 1.0
 * @author pfernandes
 */
abstract class BraspagApiConfig{
    const apiUri = 'https://apisandbox.braspag.com.br/v1/';
    
    const defaultCurrency = 'BRL';
    const defaultCountry = 'BRA';
    const defaultInterest = 'ByMerchant';
    const defaultCapture = false;
    const defaultAuthenticate = false;
    
    const merchantId = '94E5EA52-79B0-7DBA-1867-BE7B081EDD97';
    const merchantKey = '0123456789012345678901234567890123456789';
}
<?php
/**
 *   Premium Stock Market Widgets
 *   ----------------------
 *   MarketData.php
 * 
 *   @copyright  Copyright (c) FinancialPlugins, All rights reserved
 *   @author     FinancialPlugins <info@financialplugins.com>
 *   @see        https://financialplugins.com
*/

namespace PremiumStockMarketWidgets;


class MarketData
{
    const CACHE_FOLDER = 'data';

    const C_NAME = 'A3';

    const NEWS_HEADLINES_URL = 'https://feeds.finance.yahoo.com/rss/2.0/headline?s=';

    protected $params;

    const CURRENCIES = [
        'AED' => 'United Arab Emirates Dirham',
        'AFN' => 'Afghan Afghani',
        'ALL' => 'Albanian Lek',
        'AMD' => 'Armenian Dram',
        'ANG' => 'Netherlands Antillean Guilder',
        'AOA' => 'Angolan Kwanza',
        'ARS' => 'Argentine Peso',
        'AUD' => 'Australian Dollar',
        'AWG' => 'Aruban Florin',
        'AZN' => 'Azerbaijani Manat',
        'BAM' => 'Bosnia and Herzegovina Convertible Mark',
        'BBD' => 'Barbadian Dollar',
        'BDT' => 'Bangladeshi Taka',
        'BGN' => 'Bulgarian Lev',
        'BHD' => 'Bahraini Dinar',
        'BIF' => 'Burundian Franc',
        'BMD' => 'Bermudian Dollar',
        'BND' => 'Brunei Dollar',
        'BOB' => 'Bolivian Boliviano',
        'BRL' => 'Brazilian Real',
        'BSD' => 'Bahamian Dollar',
        'BTN' => 'Bhutanese Ngultrum',
        'BWP' => 'Botswanan Pula',
        'BYN' => 'Belarusian Ruble',
        'BZD' => 'Belize Dollar',
        'CAD' => 'Canadian Dollar',
        'CDF' => 'Congolese Franc',
        'CHF' => 'Swiss Franc',
        'CLP' => 'Chilean Peso',
        'CNY' => 'Chinese Yuan',
        'COP' => 'Colombian Peso',
        'CRC' => 'Costa Rican Colón',
        'CUP' => 'Cuban Peso',
        'CVE' => 'Cape Verdean Escudo',
        'CZK' => 'Czech Republic Koruna',
        'DJF' => 'Djiboutian Franc',
        'DKK' => 'Danish Krone',
        'DOP' => 'Dominican Peso',
        'DZD' => 'Algerian Dinar',
        'EGP' => 'Egyptian Pound',
        'ERN' => 'Eritrean Nakfa',
        'ETB' => 'Ethiopian Birr',
        'EUR' => 'Euro',
        'FJD' => 'Fijian Dollar',
        'FKP' => 'Falkland Islands Pound',
        'FOK' => 'Faroese Króna',
        'GBP' => 'British Pound Sterling',
        'GEL' => 'Georgian Lari',
        'GGP' => 'Guernsey Pound',
        'GHS' => 'Ghanaian Cedi',
        'GIP' => 'Gibraltar Pound',
        'GMD' => 'Gambian Dalasi',
        'GNF' => 'Guinean Franc',
        'GTQ' => 'Guatemalan Quetzal',
        'GYD' => 'Guyanaese Dollar',
        'HKD' => 'Hong Kong Dollar',
        'HNL' => 'Honduran Lempira',
        'HRK' => 'Croatian Kuna',
        'HTG' => 'Haitian Gourde',
        'HUF' => 'Hungarian Forint',
        'IDR' => 'Indonesian Rupiah',
        'ILS' => 'Israeli New Sheqel',
        'IMP' => 'Isle of Man Pound',
        'INR' => 'Indian Rupee',
        'IQD' => 'Iraqi Dinar',
        'IRR' => 'Iranian Rial',
        'ISK' => 'Icelandic Króna',
        'JEP' => 'Jersey Pound',
        'JMD' => 'Jamaican Dollar',
        'JOD' => 'Jordanian Dinar',
        'JPY' => 'Japanese Yen',
        'KES' => 'Kenyan Shilling',
        'KGS' => 'Kyrgystani Som',
        'KHR' => 'Cambodian Riel',
        'KID' => 'Kiribati Dollar',
        'KMF' => 'Comorian Franc',
        'KPW' => 'North Korean Won',
        'KRW' => 'South Korean Won',
        'KWD' => 'Kuwaiti Dinar',
        'KYD' => 'Cayman Islands Dollar',
        'KZT' => 'Kazakhstani Tenge',
        'LAK' => 'Laotian Kip',
        'LBP' => 'Lebanese Pound',
        'LKR' => 'Sri Lankan Rupee',
        'LRD' => 'Liberian Dollar',
        'LSL' => 'Lesotho Loti',
        'LYD' => 'Libyan Dinar',
        'MAD' => 'Moroccan Dirham',
        'MDL' => 'Moldovan Leu',
        'MGA' => 'Malagasy Ariary',
        'MKD' => 'Macedonian Denar',
        'MMK' => 'Myanma Kyat',
        'MNT' => 'Mongolian Tugrik',
        'MOP' => 'Macanese Pataca',
        'MRU' => 'Mauritanian Ouguiya',
        'MUR' => 'Mauritian Rupee',
        'MVR' => 'Maldivian Rufiyaa',
        'MWK' => 'Malawian Kwacha',
        'MXN' => 'Mexican Peso',
        'MYR' => 'Malaysian Ringgit',
        'MZN' => 'Mozambican Metical',
        'NAD' => 'Namibian Dollar',
        'NGN' => 'Nigerian Naira',
        'NIO' => 'Nicaraguan Córdoba',
        'NOK' => 'Norwegian Krone',
        'NPR' => 'Nepalese Rupee',
        'NZD' => 'New Zealand Dollar',
        'OMR' => 'Omani Rial',
        'PAB' => 'Panamanian Balboa',
        'PEN' => 'Peruvian Nuevo Sol',
        'PGK' => 'Papua New Guinean Kina',
        'PHP' => 'Philippine Peso',
        'PKR' => 'Pakistani Rupee',
        'PLN' => 'Polish Zloty',
        'PYG' => 'Paraguayan Guarani',
        'QAR' => 'Qatari Rial',
        'RON' => 'Romanian Leu',
        'RSD' => 'Serbian Dinar',
        'RUB' => 'Russian Ruble',
        'RWF' => 'Rwandan Franc',
        'SAR' => 'Saudi Riyal',
        'SBD' => 'Solomon Islands Dollar',
        'SCR' => 'Seychellois Rupee',
        'SDG' => 'Sudanese Pound',
        'SEK' => 'Swedish Krona',
        'SGD' => 'Singapore Dollar',
        'SHP' => 'Saint Helena Pound',
        'SLL' => 'Sierra Leonean Leone',
        'SOS' => 'Somali Shilling',
        'SRD' => 'Surinamese Dollar',
        'SSP' => 'South Sudanese Pound',
        'STN' => 'São Tomé and Príncipe Dobra',
        'SYP' => 'Syrian Pound',
        'SZL' => 'Swazi Lilangeni',
        'THB' => 'Thai Baht',
        'TJS' => 'Tajikistani Somoni',
        'TMT' => 'Turkmenistani Manat',
        'TND' => 'Tunisian Dinar',
        'TOP' => 'Tongan Pa\'anga',
        'TRY' => 'Turkish Lira',
        'TTD' => 'Trinidad and Tobago Dollar',
        'TVD' => 'Tuvaluan Dollar',
        'TWD' => 'New Taiwan Dollar',
        'TZS' => 'Tanzanian Shilling',
        'UAH' => 'Ukrainian Hryvnia',
        'UGX' => 'Ugandan Shilling',
        'USD' => 'United States Dollar',
        'UYU' => 'Uruguayan Peso',
        'UZS' => 'Uzbekistan Som',
        'VES' => 'Venezuelan Bolívar',
        'VND' => 'Vietnamese Dong',
        'VUV' => 'Vanuatu Vatu',
        'WST' => 'Samoan Tala',
        'XAF' => 'CFA Franc BEAC',
        'XCD' => 'East Caribbean Dollar',
        'XOF' => 'CFA Franc BCEAO',
        'XPF' => 'CFP Franc',
        'YER' => 'Yemeni Rial',
        'ZAR' => 'South African Rand',
        'ZMW' => 'Zambian Kwacha',
        'ZWL' => 'Zimbabwean Dollar',
    ];

    protected $financialReportingFields = [
        'income_statement' => [
            'TaxEffectOfUnusualItems', 'TaxRateForCalcs', 'NormalizedEBITDA', 'NormalizedDilutedEPS', 'NormalizedBasicEPS', 'TotalUnusualItems', 'TotalUnusualItemsExcludingGoodwill', 'NetIncomeFromContinuingOperationNetMinorityInterest', 'ReconciledDepreciation', 'ReconciledCostOfRevenue', 'EBITDA', 'EBIT', 'NetInterestIncome', 'InterestExpense', 'InterestIncome', 'ContinuingAndDiscontinuedDilutedEPS', 'ContinuingAndDiscontinuedBasicEPS', 'NormalizedIncome', 'NetIncomeFromContinuingAndDiscontinuedOperation', 'TotalExpenses', 'RentExpenseSupplemental', 'ReportedNormalizedDilutedEPS', 'ReportedNormalizedBasicEPS', 'TotalOperatingIncomeAsReported', 'DividendPerShare', 'DilutedAverageShares', 'BasicAverageShares', 'DilutedEPS', 'DilutedEPSOtherGainsLosses', 'TaxLossCarryforwardDilutedEPS', 'DilutedAccountingChange', 'DilutedExtraordinary', 'DilutedDiscontinuousOperations', 'DilutedContinuousOperations', 'BasicEPS', 'BasicEPSOtherGainsLosses', 'TaxLossCarryforwardBasicEPS', 'BasicAccountingChange', 'BasicExtraordinary', 'BasicDiscontinuousOperations', 'BasicContinuousOperations', 'DilutedNIAvailtoComStockholders', 'AverageDilutionEarnings', 'NetIncomeCommonStockholders', 'OtherunderPreferredStockDividend', 'PreferredStockDividends', 'NetIncome', 'MinorityInterests', 'NetIncomeIncludingNoncontrollingInterests', 'NetIncomeFromTaxLossCarryforward', 'NetIncomeExtraordinary', 'NetIncomeDiscontinuousOperations', 'NetIncomeContinuousOperations', 'EarningsFromEquityInterestNetOfTax', 'TaxProvision', 'PretaxIncome', 'OtherIncomeExpense', 'OtherNonOperatingIncomeExpenses', 'SpecialIncomeCharges', 'GainOnSaleOfPPE', 'GainOnSaleOfBusiness', 'OtherSpecialCharges', 'WriteOff', 'ImpairmentOfCapitalAssets', 'RestructuringAndMergernAcquisition', 'SecuritiesAmortization', 'EarningsFromEquityInterest', 'GainOnSaleOfSecurity', 'NetNonOperatingInterestIncomeExpense', 'TotalOtherFinanceCost', 'InterestExpenseNonOperating', 'InterestIncomeNonOperating', 'OperatingIncome', 'OperatingExpense', 'OtherOperatingExpenses', 'OtherTaxes', 'ProvisionForDoubtfulAccounts', 'DepreciationAmortizationDepletionIncomeStatement', 'DepletionIncomeStatement', 'DepreciationAndAmortizationInIncomeStatement', 'Amortization', 'AmortizationOfIntangiblesIncomeStatement', 'DepreciationIncomeStatement', 'ResearchAndDevelopment', 'SellingGeneralAndAdministration', 'SellingAndMarketingExpense', 'GeneralAndAdministrativeExpense', 'OtherGandA', 'InsuranceAndClaims', 'RentAndLandingFees', 'SalariesAndWages', 'GrossProfit', 'CostOfRevenue', 'TotalRevenue', 'ExciseTaxes', 'OperatingRevenue'
        ],
        'balance_sheet' => [
            'TreasurySharesNumber', 'PreferredSharesNumber', 'OrdinarySharesNumber', 'ShareIssued', 'NetDebt', 'TotalDebt', 'TangibleBookValue', 'InvestedCapital', 'WorkingCapital', 'NetTangibleAssets', 'CapitalLeaseObligations', 'CommonStockEquity', 'PreferredStockEquity', 'TotalCapitalization', 'TotalEquityGrossMinorityInterest', 'MinorityInterest', 'StockholdersEquity', 'OtherEquityInterest', 'GainsLossesNotAffectingRetainedEarnings', 'OtherEquityAdjustments', 'FixedAssetsRevaluationReserve', 'ForeignCurrencyTranslationAdjustments', 'MinimumPensionLiabilities', 'UnrealizedGainLoss', 'TreasuryStock', 'RetainedEarnings', 'AdditionalPaidInCapital', 'CapitalStock', 'OtherCapitalStock', 'CommonStock', 'PreferredStock', 'TotalPartnershipCapital', 'GeneralPartnershipCapital', 'LimitedPartnershipCapital', 'TotalLiabilitiesNetMinorityInterest', 'TotalNonCurrentLiabilitiesNetMinorityInterest', 'OtherNonCurrentLiabilities', 'LiabilitiesHeldforSaleNonCurrent', 'RestrictedCommonStock', 'PreferredSecuritiesOutsideStockEquity', 'DerivativeProductLiabilities', 'EmployeeBenefits', 'NonCurrentPensionAndOtherPostretirementBenefitPlans', 'NonCurrentAccruedExpenses', 'DuetoRelatedPartiesNonCurrent', 'TradeandOtherPayablesNonCurrent', 'NonCurrentDeferredLiabilities', 'NonCurrentDeferredRevenue', 'NonCurrentDeferredTaxesLiabilities', 'LongTermDebtAndCapitalLeaseObligation', 'LongTermCapitalLeaseObligation', 'LongTermDebt', 'LongTermProvisions', 'CurrentLiabilities', 'OtherCurrentLiabilities', 'CurrentDeferredLiabilities', 'CurrentDeferredRevenue', 'CurrentDeferredTaxesLiabilities', 'CurrentDebtAndCapitalLeaseObligation', 'CurrentCapitalLeaseObligation', 'CurrentDebt', 'OtherCurrentBorrowings', 'LineOfCredit', 'CommercialPaper', 'CurrentNotesPayable', 'PensionandOtherPostRetirementBenefitPlansCurrent', 'CurrentProvisions', 'PayablesAndAccruedExpenses', 'CurrentAccruedExpenses', 'InterestPayable', 'Payables', 'OtherPayable', 'DuetoRelatedPartiesCurrent', 'DividendsPayable', 'TotalTaxPayable', 'IncomeTaxPayable', 'AccountsPayable', 'TotalAssets', 'TotalNonCurrentAssets', 'OtherNonCurrentAssets', 'DefinedPensionBenefit', 'NonCurrentPrepaidAssets', 'NonCurrentDeferredAssets', 'NonCurrentDeferredTaxesAssets', 'DuefromRelatedPartiesNonCurrent', 'NonCurrentNoteReceivables', 'NonCurrentAccountsReceivable', 'FinancialAssets', 'InvestmentsAndAdvances', 'OtherInvestments', 'InvestmentinFinancialAssets', 'HeldToMaturitySecurities', 'AvailableForSaleSecurities', 'FinancialAssetsDesignatedasFairValueThroughProfitorLossTotal', 'TradingSecurities', 'LongTermEquityInvestment', 'InvestmentsinJointVenturesatCost', 'InvestmentsInOtherVenturesUnderEquityMethod', 'InvestmentsinAssociatesatCost', 'InvestmentsinSubsidiariesatCost', 'InvestmentProperties', 'GoodwillAndOtherIntangibleAssets', 'OtherIntangibleAssets', 'Goodwill', 'NetPPE', 'AccumulatedDepreciation', 'GrossPPE', 'Leases', 'ConstructionInProgress', 'OtherProperties', 'MachineryFurnitureEquipment', 'BuildingsAndImprovements', 'LandAndImprovements', 'Properties', 'CurrentAssets', 'OtherCurrentAssets', 'HedgingAssetsCurrent', 'AssetsHeldForSaleCurrent', 'CurrentDeferredAssets', 'CurrentDeferredTaxesAssets', 'RestrictedCash', 'PrepaidAssets', 'Inventory', 'InventoriesAdjustmentsAllowances', 'OtherInventories', 'FinishedGoods', 'WorkInProcess', 'RawMaterials', 'Receivables', 'ReceivablesAdjustmentsAllowances', 'OtherReceivables', 'DuefromRelatedPartiesCurrent', 'TaxesReceivable', 'AccruedInterestReceivable', 'NotesReceivable', 'LoansReceivable', 'AccountsReceivable', 'AllowanceForDoubtfulAccountsReceivable', 'GrossAccountsReceivable', 'CashCashEquivalentsAndShortTermInvestments', 'OtherShortTermInvestments', 'CashAndCashEquivalents', 'CashEquivalents', 'CashFinancial'
        ],
        'cash_flow' => [
            'ForeignSales', 'DomesticSales', 'AdjustedGeographySegmentData', 'FreeCashFlow', 'RepurchaseOfCapitalStock', 'RepaymentOfDebt', 'IssuanceOfDebt', 'IssuanceOfCapitalStock', 'CapitalExpenditure', 'InterestPaidSupplementalData', 'IncomeTaxPaidSupplementalData', 'EndCashPosition', 'OtherCashAdjustmentOutsideChangeinCash', 'BeginningCashPosition', 'EffectOfExchangeRateChanges', 'ChangesInCash', 'OtherCashAdjustmentInsideChangeinCash', 'CashFlowFromDiscontinuedOperation', 'FinancingCashFlow', 'CashFromDiscontinuedFinancingActivities', 'CashFlowFromContinuingFinancingActivities', 'NetOtherFinancingCharges', 'InterestPaidCFF', 'ProceedsFromStockOptionExercised', 'CashDividendsPaid', 'PreferredStockDividendPaid', 'CommonStockDividendPaid', 'NetPreferredStockIssuance', 'PreferredStockPayments', 'PreferredStockIssuance', 'NetCommonStockIssuance', 'CommonStockPayments', 'CommonStockIssuance', 'NetIssuancePaymentsOfDebt', 'NetShortTermDebtIssuance', 'ShortTermDebtPayments', 'ShortTermDebtIssuance', 'NetLongTermDebtIssuance', 'LongTermDebtPayments', 'LongTermDebtIssuance', 'InvestingCashFlow', 'CashFromDiscontinuedInvestingActivities', 'CashFlowFromContinuingInvestingActivities', 'NetOtherInvestingChanges', 'InterestReceivedCFI', 'DividendsReceivedCFI', 'NetInvestmentPurchaseAndSale', 'SaleOfInvestment', 'PurchaseOfInvestment', 'NetInvestmentPropertiesPurchaseAndSale', 'SaleOfInvestmentProperties', 'PurchaseOfInvestmentProperties', 'NetBusinessPurchaseAndSale', 'SaleOfBusiness', 'PurchaseOfBusiness', 'NetIntangiblesPurchaseAndSale', 'SaleOfIntangibles', 'PurchaseOfIntangibles', 'NetPPEPurchaseAndSale', 'SaleOfPPE', 'PurchaseOfPPE', 'CapitalExpenditureReported', 'OperatingCashFlow', 'CashFromDiscontinuedOperatingActivities', 'CashFlowFromContinuingOperatingActivities', 'TaxesRefundPaid', 'InterestReceivedCFO', 'InterestPaidCFO', 'DividendReceivedCFO', 'DividendPaidCFO', 'ChangeInWorkingCapital', 'ChangeInOtherWorkingCapital', 'ChangeInOtherCurrentLiabilities', 'ChangeInOtherCurrentAssets', 'ChangeInPayablesAndAccruedExpense', 'ChangeInAccruedExpense', 'ChangeInInterestPayable', 'ChangeInPayable', 'ChangeInDividendPayable', 'ChangeInAccountPayable', 'ChangeInTaxPayable', 'ChangeInIncomeTaxPayable', 'ChangeInPrepaidAssets', 'ChangeInInventory', 'ChangeInReceivables', 'ChangesInAccountReceivables', 'OtherNonCashItems', 'ExcessTaxBenefitFromStockBasedCompensation', 'StockBasedCompensation', 'UnrealizedGainLossOnInvestmentSecurities', 'ProvisionandWriteOffofAssets', 'AssetImpairmentCharge', 'AmortizationOfSecurities', 'DeferredTax', 'DeferredIncomeTax', 'DepreciationAmortizationDepletion', 'Depletion', 'DepreciationAndAmortization', 'AmortizationCashFlow', 'AmortizationOfIntangibles', 'Depreciation', 'OperatingGainsLosses', 'PensionAndEmployeeBenefitExpense', 'EarningsLossesFromEquityInvestments', 'GainLossOnInvestmentSecurities', 'NetForeignCurrencyExchangeGainLoss', 'GainLossOnSaleOfPPE', 'GainLossOnSaleOfBusiness', 'NetIncomeFromContinuingOperations', 'CashFlowsfromusedinOperatingActivitiesDirect', 'TaxesRefundPaidDirect', 'InterestReceivedDirect', 'InterestPaidDirect', 'DividendsReceivedDirect', 'DividendsPaidDirect', 'ClassesofCashPayments', 'OtherCashPaymentsfromOperatingActivities', 'PaymentsonBehalfofEmployees', 'PaymentstoSuppliersforGoodsandServices', 'ClassesofCashReceiptsfromOperatingActivities', 'OtherCashReceiptsfromOperatingActivities', 'ReceiptsfromGovernmentGrants', 'ReceiptsfromCustomers'
        ]
    ];

    protected $endPoints = [
        'quotes' => [
            'fields' => [
                'type', 'symbol', 'symbol_tooltip', 'name_tooltip', 'name', 'logo', 'logo_name', 'logo_name_link',
                'logo_name_symbol', 'link', 'comment', 'chart', 'price', 'currency', 'open', 'low', 'high',
                'previous_close', 'change_abs', 'change_pct', '52_week_low', '52_week_low_change_abs',
                '52_week_low_change_pct', '52_week_high', '52_week_high_change_abs', '52_week_high_change_pct',
                'volume', 'shares_outstanding', 'market_cap', 'exchange_code', 'exchange_name', 'exchange_tz_name',
                'exchange_tz_code', 'last_update'
            ],
            'url' => 'https://query%d.finance.yahoo.com/v7/finance/quote?formatted=false&symbols=%s&fields=shortName,longName,regularMarketOpen,regularMarketPrice,regularMarketChange,regularMarketChangePercent,regularMarketVolume,sharesOutstanding,marketCap,fiftyTwoWeekLow,fiftyTwoWeekHigh&crumb=%s',
            'result' => 'quoteResponse.result',
            'cache' => 300
        ],
        'quotes-extended' => [
            'url' => 'https://query%d.finance.yahoo.com/v10/finance/quoteSummary/%s?formatted=false&modules=price,summaryDetail,defaultKeyStatistics,financialData&crumb=%s',
            'result' => 'quoteSummary.result',
            'cache' => 600
        ],
        'financials' => [
            'url' => 'https://query%d.finance.yahoo.com/ws/fundamentals-timeseries/v1/finance/timeseries/%s?padTimeSeries=true&type=%s&merge=false&period1=493590046&period2=%d&crumb=%s',
            'result' => 'timeseries.result',
            'cache' => 2592000 
        ],
        'info' => [
            'fields' => [
                'symbol', 'name', 'logo', 'logo_name', 'logo_name_symbol', 'description', 'industry', 'sector', 'phone',
                'website', 'full_address', 'address', 'city', 'state', 'country', 'zip', 'employees_count'
            ],
            'url' => 'https://query%d.finance.yahoo.com/v10/finance/quoteSummary/%s?formatted=false&modules=price,summaryProfile&crumb=%s',
            'result' => 'quoteSummary.result',
            'cache' => 15724800 
        ],
        'options' => [
            'url' => 'https://query%d.finance.yahoo.com/v7/finance/options/%s?formatted=true&date=%s&crumb=%s',
            'result' => 'optionChain.result',
            'cache' => 600
        ],
        'history' => [
            'url' => 'https://query%d.finance.yahoo.com/v8/finance/chart/%s?range=%s&interval=%s&includePrePost=false&events=%s&crumb=%s',
            'result' => 'chart.result',
            'cache' => [


                '5m' => 300,
                '15m' => 900,
                '30m' => 1800,
                '60m' => 3600,
                '90m' => 5400,
                '1h' => 3600,
                '1d' => 43200, 
                '5d' => 86400, 
                '1wk' => 86400, 
                '1mo' => 86400, 
                '3mo' => 604800, 
            ]
        ]
    ];

    protected $mappings = [
        'quotes' => [
            'type' => 'quoteType',
            'symbol' => 'symbol',
            'price' => 'regularMarketPrice',
            'currency' => 'currency',
            'open' => 'regularMarketOpen',
            'low' => 'regularMarketDayLow',
            'high' => 'regularMarketDayHigh',
            'previous_close' => 'regularMarketPreviousClose',
            'change_abs' => 'regularMarketChange',
            'change_pct' => '{regularMarketChangePercent}/100',
            '52_week_low' => 'fiftyTwoWeekLow',
            '52_week_low_change_abs' => 'fiftyTwoWeekLowChange',
            '52_week_low_change_pct' => 'fiftyTwoWeekLowChangePercent',
            '52_week_high' => 'fiftyTwoWeekHigh',
            '52_week_high_change_abs' => 'fiftyTwoWeekHighChange',
            '52_week_high_change_pct' => 'fiftyTwoWeekHighChangePercent',
            'volume' => 'regularMarketVolume',
            'shares_outstanding' => 'sharesOutstanding',
            'market_cap' => 'marketCap',
            'exchange_code' => 'exchange',
            'exchange_name' => 'fullExchangeName',
            'exchange_tz_name' => 'exchangeTimezoneName',
            'exchange_tz_code' => 'exchangeTimezoneShortName',
            'last_update' => '{regularMarketTime}*1000', 
        ],
        'quotes-extended' => [
            'type' => 'price.quoteType',
            'symbol' => 'price.symbol',
            'price' => 'price.regularMarketPrice',
            'currency' => 'price.currency',
            'open' => 'price.regularMarketOpen',
            'low' => 'price.regularMarketDayLow',
            'high' => 'price.regularMarketDayHigh',
            'previous_close' => 'price.regularMarketPreviousClose',
            'change_abs' => 'price.regularMarketChange',
            'change_pct' => 'price.regularMarketChangePercent',
            'volume' => 'price.regularMarketVolume',
            'market_cap' => 'price.marketCap',
            'exchange_code' => 'price.exchange',
            'exchange_name' => 'price.exchangeName',
            'last_update' => '{price.regularMarketTime}*1000',
            
            'nav' => 'summaryDetail.navPrice', 
            'net_assets' => 'summaryDetail.totalAssets', 
            '52_week_low' => 'summaryDetail.fiftyTwoWeekLow',
            '52_week_high' => 'summaryDetail.fiftyTwoWeekHigh',
            'dividend_rate' => 'summaryDetail.dividendRate',
            'dividend_yield' => 'summaryDetail.dividendYield',
            'ex_dividend_date' => '{summaryDetail.exDividendDate}*1000',
            '5_year_avg_dividend_yield' => 'summaryDetail.fiveYearAvgDividendYield',
            'payout_ratio' => 'summaryDetail.payoutRatio',
            'beta' => 'summaryDetail.beta',
            'pe_ratio' => 'summaryDetail.trailingPE',
            'forward_pe_ratio' => 'summaryDetail.forwardPE',
            'average_volume' => 'summaryDetail.averageVolume',
            'average_volume_10_days' => 'summaryDetail.averageVolume10days',
            'price_to_sales_trailing_12_months' => 'summaryDetail.priceToSalesTrailing12Months',
            '50_day_average' => 'summaryDetail.fiftyDayAverage',
            '200_day_average' => 'summaryDetail.twoHundredDayAverage',
            'annual_dividend_rate' => 'summaryDetail.trailingAnnualDividendRate',
            'annual_dividend_yield' => 'summaryDetail.trailingAnnualDividendYield',
            
            'category' => 'defaultKeyStatistics.category', 
            'fund_family' => 'defaultKeyStatistics.fundFamily', 
            'fund_inception_date' => '{defaultKeyStatistics.fundInceptionDate}*1000', 
            'legal_type' => 'defaultKeyStatistics.legalType', 
            'three_year_average_return' => 'defaultKeyStatistics.threeYearAverageReturn', 
            'five_year_average_return' => 'defaultKeyStatistics.fiveYearAverageReturn', 
            '52_week_change_pct' => 'defaultKeyStatistics.52WeekChange',
            'enterprise_value' => 'defaultKeyStatistics.enterpriseValue',
            'profit_margin' => 'defaultKeyStatistics.profitMargins',
            'shares_outstanding' => 'defaultKeyStatistics.sharesOutstanding',
            'shares_float' => 'defaultKeyStatistics.floatShares',
            'shares_short' => 'defaultKeyStatistics.sharesShort',
            'short_ratio' => 'defaultKeyStatistics.shortRatio',
            'short_pct_of_float' => 'defaultKeyStatistics.shortPercentOfFloat',
            'book_value' => 'defaultKeyStatistics.bookValue',
            'price_book' => 'defaultKeyStatistics.priceToBook',
            'quarter_earnings_growth' => 'defaultKeyStatistics.earningsQuarterlyGrowth',
            'net_income_to_common' => 'defaultKeyStatistics.netIncomeToCommon',
            'eps' => 'defaultKeyStatistics.trailingEps',
            'forward_eps' => 'defaultKeyStatistics.forwardEps',
            'peg_ratio' => 'defaultKeyStatistics.pegRatio',
            'last_split_factor' => 'defaultKeyStatistics.lastSplitFactor',
            'last_split_date' => '{defaultKeyStatistics.lastSplitDate}*1000',
            'enterprise_revenue' => 'defaultKeyStatistics.enterpriseToRevenue',
            'enterprise_ebitda' => 'defaultKeyStatistics.enterpriseToEbitda',
            'ytd_return' => 'defaultKeyStatistics.ytdReturn', 
            'held_percent_insiders' => 'defaultKeyStatistics.heldPercentInsiders',
            'held_percent_institutions' => 'defaultKeyStatistics.heldPercentInstitutions',
            
            'target_high_price' => 'financialData.targetHighPrice',
            'target_low_price' => 'financialData.targetLowPrice',
            'target_mean_price' => 'financialData.targetMeanPrice',
            'target_median_price' => 'financialData.targetMedianPrice',
            'recommendation_mean' => 'financialData.recommendationMean',
            'recommendation_key' => 'financialData.recommendationKey',
            'analyst_opinions' => 'financialData.numberOfAnalystOpinions',
            'total_cash' => 'financialData.totalCash',
            'total_cash_per_share' => 'financialData.totalCashPerShare',
            'ebitda' => 'financialData.ebitda',
            'ebitda_margin' => 'financialData.ebitdaMargins',
            'total_debt' => 'financialData.totalDebt',
            'quick_ratio' => 'financialData.quickRatio',
            'current_ratio' => 'financialData.currentRatio',
            'total_revenue' => 'financialData.totalRevenue',
            'debt_equity' => 'financialData.debtToEquity',
            'revenue_per_share' => 'financialData.revenuePerShare',
            'return_on_assets' => 'financialData.returnOnAssets',
            'return_on_equity' => 'financialData.returnOnEquity',
            'gross_profit' => 'financialData.grossProfits',
            'gross_margin' => 'financialData.grossMargins',
            'free_cashflow' => 'financialData.freeCashflow',
            'operating_cashflow' => 'financialData.operatingCashflow',
            'earnings_growth' => 'financialData.earningsGrowth',
            'revenue_growth' => 'financialData.revenueGrowth',
            'operating_margin' => 'financialData.operatingMargins',
        ],
        'info' => [
            'symbol' => 'price.symbol',
            'address' => 'summaryProfile.address1',
            'city' => 'summaryProfile.city',
            'state' => 'summaryProfile.state',
            'zip' => 'summaryProfile.zip',
            'country' => 'summaryProfile.country',
            'phone' => 'summaryProfile.phone',
            'website' => 'summaryProfile.website',
            'industry' => 'summaryProfile.industry',
            'sector' => 'summaryProfile.sector',
            'description' => 'summaryProfile.longBusinessSummary',
            'employees_count' => 'summaryProfile.fullTimeEmployees',
        ],
        'history' => [
            'symbol' => 'meta.symbol',
            'currency' => 'meta.currency',
        ],
        'options' => [
            'symbol' => 'underlyingSymbol',
            'currency' => 'quote.currency',
            'strikes' => 'strikes',
        ]
    ];

    protected $enrichments = [
        'quotes' => [
            'name' => [
                'method' => 'getAssetName',
                'parameters' => ['longName', 'shortName', NULL], 
            ]
        ],
        'quotes-extended' => [
            'name' => [
                'method' => 'getAssetName',
                'parameters' => ['price.longName', 'price.shortName', 'price'], 
            ],
            'financial_currency' => [
                'method' => 'getFirstDefinedValue',
                'parameters' => ['financialData.financialCurrency', 'price.currency'],
            ]
        ],
        'info' => [
            'name' => [
                'method' => 'getFirstDefinedValue',
                'parameters' => ['price.longName', 'price.shortName'],
            ],
            'full_address' => [
                'method' => 'makeFullAddress',
                'parameters' => ['summaryProfile.address1', 'summaryProfile.city', 'summaryProfile.state', 'summaryProfile.zip', 'summaryProfile.country'],
            ]
        ],
        'history' => [
            'series' => [
                'method' => 'processHistoricalData',
                'parameters' => [
                    'timestamp',
                    'indicators.quote.0.open',
                    'indicators.quote.0.high',
                    'indicators.quote.0.low',
                    'indicators.quote.0.close',
                    'indicators.adjclose.0.adjclose',
                    'indicators.quote.0.volume',
                ],
            ],
            'events' => [
                'method' => 'processEvents',
                'parameters' => [
                    'timestamp',
                    'events'
                ]
            ]
        ],
        'options' => [
            'expiration_date' => [
                'method' => 'processOptionExpirationDates',
                'parameters' => ['expirationDates'],
            ],
            'expiration_dates' => [
                'method' => 'mapSecondsToMilliseconds',
                'parameters' => ['expirationDates'],
            ],
            'calls' => [
                'method' => 'processOptionCallsOrPuts',
                'parameters' => ['options.0.calls'],
            ],
            'puts' => [
                'method' => 'processOptionCallsOrPuts',
                'parameters' => ['options.0.puts'],
            ],
            'calls_puts' => [
                'method' => 'processOptionCallsAndPuts',
                'parameters' => ['options.0.calls', 'options.0.puts'],
            ]
        ]
    ];

    protected $calculatedFields;

    protected $endpointKey;

    protected $creds;

    function __construct(array $request, array $calculatedFields)
    {
        $cacheDirPath = __DIR__ . '/../../' . self::CACHE_FOLDER;

        
        if (!is_dir($cacheDirPath)) {
            mkdir($cacheDirPath);
        }

        $this->calculatedFields = $calculatedFields;

        
        foreach ($request as $key => $value) {
            if (in_array($key, ['api', 'type', 'assets', 'fields', 'range', 'interval', 'feed', 'skip', 'limit', 'keywords', 'report', 'expiration_date'])) {
                $this->params[$key] = $value;
            }
        }

        
        $staticFields = isset($this->params['fields'])
            ? array_filter($this->params['fields'], function ($field) {
                return !in_array($field, array_column($this->calculatedFields, 'id'))
                    && !in_array($field, ['range', '52_week_range']);
            })
            : [];

        
        $referencedFields = array_unique(array_reduce($this->calculatedFields, function ($carry, $field) {
            if (isset($field['formula']) && preg_match_all('#{([a-z0-9_]+)}#i', $field['formula'], $matches)) {
                $carry = array_merge($carry, $matches[1]);
            }
            return $carry;
        }, []));

        if ($this->params['api'] == 'yf') {
            
            if (isset($this->params['range']) && isset($this->params['interval'])) {
                $this->endpointKey = 'history';
                
            } elseif (preg_match('#-options$#', $this->params['type'])) {
                $this->endpointKey = 'options';
                
            } elseif (preg_match('#-financials$#', $this->params['type'])) {
                $this->endpointKey = 'financials';
                
            } elseif (!isset($this->params['fields']) || (is_array($this->params['fields']) && Helper::arrayContainsAll($staticFields, $this->endPoints['quotes']['fields']) && Helper::arrayContainsAll($referencedFields, $this->endPoints['quotes']['fields']))) {
                $this->endpointKey = 'quotes';
            } elseif (isset($this->params['fields']) && is_array($this->params['fields'])) {
                
                if (Helper::arrayContainsAll($this->params['fields'], $this->endPoints['info']['fields'])) {
                    $this->endpointKey = 'info';
                    
                } else {
                    $this->endpointKey = 'quotes-extended';
                }
            }

            $this->creds = $request['creds'] ?? [];
        }
    }

    public function get()
    {
        $data = [];
        $apiHits = 0;
        $cacheHits = 0;
        $apiTime = 0;

        $startTime = microtime(TRUE);

        if ($this->params['api'] == 'yf') {
            if (isset($this->endPoints[$this->endpointKey]) && is_array($this->params['assets']) && !empty($this->params['assets'])) {

                $symbols = [];
                
                foreach ($this->params['assets'] as $symbol) {
                    $cacheFileName = $this->getCacheFileName($symbol);

                    
                    if ($this->endpointKey == 'info' && ($info = Helper::readJson(sprintf('%s/%s_%s.json', 'data-udf', $symbol, $this->endpointKey)))) {
                        $data[] = $info;
                        $cacheHits++;
                        
                    } elseif (Helper::fileIsUpToDate($cacheFileName, $this->getCacheTime())) {
                        $data[] = Helper::readJson($cacheFileName);
                        $cacheHits++;
                        
                    } else {
                        $symbols[] = $symbol;
                    }
                }

                
                if (!empty($symbols)) {
                    $urls = $this->getRequestUrls($symbols);

                    $unprocessedSymbols = $symbols;

                    foreach ($urls as $url) {
                        $http = $this->getValueB() ? new Http($url, ['cookies' => [self::C_NAME => $this->getValueB()]]) : new Http($url);
                        $apiStartTime = microtime(TRUE);
                        $response = Helper::decode($http->get());
                        $apiTime += (microtime(TRUE) - $apiStartTime);
                        $apiHits++;

                        
                        $dataItems = Helper::value($response, $this->endPoints[$this->endpointKey]['result']);

                        if (is_array($dataItems)) {
                            if ($this->endpointKey == 'financials') {
                                $dataItems = array_values(array_filter($dataItems, function ($item) {
                                    return count(array_keys((array) $item)) > 2;
                                }));

                                
                                $currency = preg_match('#"currencyCode":\s*"([a-z]+)"#i', json_encode($dataItems), $m) ? $m[1] : NULL;

                                $dataItem = [
                                    'symbol' => Helper::value($dataItems[0], 'meta.symbol.0'),
                                    $this->params['report'] => [
                                        'currency' => $currency,
                                        $this->params['interval'] => array_merge([
                                            'dates' => $this->mapSecondsToMilliseconds(Helper::value($dataItems[0], 'timestamp'))
                                        ], array_reduce($dataItems, function ($carry, $item) {
                                            return array_merge($carry, $this->processFinancialReportMetric($item));
                                        }, []))
                                    ]
                                ];

                                $data[] = $dataItem;
                                Helper::saveJson($this->getCacheFileName($dataItem['symbol']), $dataItem); 
                                unset($unprocessedSymbols[array_search($dataItem['symbol'], $unprocessedSymbols)]);
                            } else {
                                foreach ($dataItems as $dataItem) {
                                    $dataItem = $this->processDataItem($dataItem); 
                                    $data[] = $dataItem; 
                                    Helper::saveJson($this->getCacheFileName($dataItem['symbol']), $dataItem); 
                                    unset($unprocessedSymbols[array_search($dataItem['symbol'], $unprocessedSymbols)]);
                                }
                            }
                        }
                    }

                    
                    foreach ($unprocessedSymbols as $symbol) {
                        $data[] = array_merge($this->processDataItem(NULL), ['symbol' => $symbol]);
                    }
                }
            }
        } elseif ($this->params['api'] == 'news') {
            $news = [];
            $skip = isset($this->params['skip']) ? $this->params['skip'] : 0;
            $limit = isset($this->params['limit']) ? $this->params['limit'] : NULL;
            $keywords = isset($this->params['keywords']) && is_array($this->params['keywords']) ? array_filter($this->params['keywords']) : [];

            foreach ($this->params['feed'] as $i => $feedUrl) {
                $cacheFileName = $this->getCacheFileName($feedUrl);

                if (Helper::fileIsUpToDate($cacheFileName, $this->getCacheTime())) {
                    $xml = Helper::readFile($cacheFileName);
                    $cacheHits++;
                } else {
                    $url = strpos($feedUrl, 'http') === FALSE ? 'https://' . $feedUrl : $feedUrl;
                    $http = new Http($url);
                    $apiStartTime = microtime(TRUE);
                    $xml = $http->get();
                    $apiTime += (microtime(TRUE) - $apiStartTime);
                    $apiHits++;
                    Helper::saveFile($cacheFileName, $xml);
                }

                $news = array_merge($news, $this->xmlToArray($xml));
            }

            
            usort($news, function ($one, $other) {
                return $one['date_time'] > $other['date_time'] ? -1 : 1; 
            });

            
            if (!empty($keywords)) {
                $news = array_values(array_filter($news, function ($item) use ($keywords) {
                    $found = FALSE;
                    $strpos = function_exists('mb_strpos') ? 'mb_strpos' : 'strpos';
                    $strtolower = function_exists('mb_strtolower') ? 'mb_strtolower' : 'strtolower';
                    $categories = array_map($strtolower, $item['categories']);

                    foreach ($keywords as $keyword) {
                        if ($strpos($strtolower($item['title']), $strtolower($keyword)) !== FALSE
                            || $strpos($strtolower($item['description']), $strtolower($keyword)) !== FALSE
                            || in_array($strtolower($keyword), $categories)) {
                            $found = TRUE;
                            break;
                        }
                    }

                    return $found;
                }));
            }

            
            $news = array_slice($news, $skip, $limit);

            $data[] = [
                'symbol' => crc32(implode('', $this->params['feed']) . $skip . $limit),
                'news' => $news
            ];
        }

        return json_encode([
            'success' => !empty($data) ? TRUE : FALSE,
            'data' => $data,
            'server' => [
                'api_time' => $apiTime,
                'total_time' => (microtime(TRUE) - $startTime),
                'api_hits' => $apiHits,
                'cache_hits' => $cacheHits
            ]
        ]);
    }

    protected function xmlToArray($xml)
    {
        $simpleXml = simplexml_load_string($xml);
        $news = [];

        foreach ($simpleXml->channel->item as $item) {
            $media = $item->children('media', TRUE)->content;

            
            $dateTime = strtotime(trim((string) $item->pubDate));

            $news[] = [
                'title' => trim(html_entity_decode((string) $item->title, ENT_QUOTES)),
                'url' => trim((string) $item->link),
                'date_time' => $dateTime ? $dateTime * 1000 : NULL,
                'description' => trim(strip_tags(html_entity_decode((string) $item->description, ENT_QUOTES))),
                'image_url' => $media ? (string) $media->attributes()['url'] : ($item->image ? (string) $item->image : ''),
                'categories' => $item->category ? array_map(function ($c) {
                    return is_string($c) ? $c : implode(', ', is_array($c) ? $c : array_values((array) $c));
                }, (array) $item->category) : [],
            ];
        }

        return $news;
    }

    
    protected function getRequestUrls($symbols)
    {
        $urls = [];
        $baseUrl = $this->endPoints[$this->endpointKey]['url'];

        $symbols = array_map([Helper::class, 'encodeSymbol'], $symbols);

        
        if ($this->endpointKey == 'history') {
            foreach ($symbols as $symbol) {
                $urls[] = sprintf($baseUrl, rand(1, 2), $symbol, $this->params['range'], $this->params['interval'], urlencode('capitalGain|div|split'), $this->getValueA());
            }
            
        } elseif (in_array($this->endpointKey, ['quotes-extended', 'info'], TRUE)) {
            foreach ($symbols as $symbol) {
                $urls[] = sprintf($baseUrl, rand(1, 2), $symbol, $this->getValueA());
            }
        } elseif ($this->endpointKey == 'financials') {
            $mapField = function ($period, $field) {
                return $period . $field;
            };

            $urls[] = sprintf(
                $baseUrl,
                rand(1, 2),
                $symbols[0],
                implode(',', array_map(function ($field) use ($mapField) { return $mapField($this->params['interval'], $field); }, $this->financialReportingFields[$this->params['report']])),
                time(),
                $this->getValueA()
            );
        } elseif ($this->endpointKey == 'options') {
            $urls[] = sprintf($baseUrl, rand(1, 2), $symbols[0], isset($this->params['expiration_date']) ? $this->params['expiration_date'] : '', $this->getValueA());
        } else {
            $urls[] = sprintf($baseUrl, rand(1, 2), implode(',', $symbols), $this->getValueA());
        }

        return $urls;
    }

    protected function processDataItem($data)
    {
        $result = [];

        if (isset($this->mappings[$this->endpointKey])) {
            
            $result = array_map(function ($mapping) use ($data) {
                
                return preg_match('#{[a-z0-9_.]+}#i', $mapping)
                    ? $this->evaluateFormula($data, $mapping)
                    : Helper::value($data, $mapping);
            }, $this->mappings[$this->endpointKey]);
        }

        
        if (isset($this->enrichments[$this->endpointKey])) {
            foreach ($this->enrichments[$this->endpointKey] as $key => $enrichment) {
                $result[$key] = call_user_func_array(
                    [$this, $enrichment['method']],
                    isset($enrichment['parameters'])
                        ? array_map(
                            function ($key) use ($data) {
                                return Helper::value($data, $key);
                            },
                            $enrichment['parameters']
                        )
                        : [$data]
                );
            }
        }

        
        foreach ($this->calculatedFields as $calculatedField) {
            
            if (in_array($this->endpointKey, ['quotes', 'quotes-extended'], TRUE)) {
                $result[$calculatedField['id']] = $this->evaluateFormula((object) $result, $calculatedField['formula']);
            }
        }

        ksort($result);

        return $result;
    }

    protected function getCacheFileName($id)
    {
        if ($this->params['api'] == 'yf') {
            if ($this->endpointKey == 'history') {
                $fileName = sprintf('%s_%s_%s_%s.json', $id, $this->endpointKey, $this->params['range'], $this->params['interval']);
            } elseif ($this->endpointKey == 'financials') {
                $fileName = sprintf('%s_%s_%s.json', $id, $this->params['interval'], $this->params['report']);
            } elseif ($this->endpointKey == 'options') {
                $fileName = sprintf('%s_%s_%d.json', $id, $this->endpointKey, $this->params['expiration_date'] ?? 0);
            } else {
                $fileName = sprintf('%s_%s.json', $id, $this->endpointKey);
            }
        } else {
            $fileName = sprintf('%s.xml', md5($id));
        }

        return sprintf('%s/%s', self::CACHE_FOLDER, $fileName);
    }

    protected function getCacheTime()
    {
        return $this->params['api'] == 'yf'
            ? ($this->endpointKey == 'history'
                ? $this->endPoints[$this->endpointKey]['cache'][$this->params['interval']]
                : $this->endPoints[$this->endpointKey]['cache'])
            : 600;
    }

    protected function getFirstDefinedValue($value, $value2)
    {
        return $value ?: $value2;
    }

    protected function getAssetName($longName, $shortName, $data): ?string
    {
        $name = $longName ?: $shortName;

        if ($name && Helper::value($data, 'quoteType') === 'CURRENCY') {
            
            list ($ccy, $ccy2) = array_pad(explode('/', $name), 2, '');

            return sprintf(
                '%s / %s',
                    self::CURRENCIES[$ccy] ?? $ccy,
                    self::CURRENCIES[$ccy2] ?? $ccy2
            );
        }

        return $name;
    }

    protected function makeFullAddress(...$args): ?string
    {
        return implode(', ', array_filter($args));
    }

    protected function processHistoricalData(?array $ts, ?array $open, ?array $high, ?array $low, ?array $close, ?array$adjustedClose, ?array $volume): array
    {
        $ts = $ts ? array_map(function ($date) { return $date * 1000; }, $ts) : []; 
        $open = $open ?: [];
        $high = $high ?: [];
        $low = $low ?: [];
        $close = $close ?: [];
        $adjustedClose = $adjustedClose ?: [];
        $volume = $volume ?: [];

        return [
            $this->params['range'] => [
                $this->params['interval'] => [
                    'date' => $ts,
                    'open' => $open,
                    'high' => $high,
                    'low' => $low,
                    'close' => $close,
                    'adjusted_close' => $adjustedClose,
                    'volume' => $volume,
                    'dohlcv' => array_map(function ($i) use ($ts, $open, $high, $low, $close, $adjustedClose, $volume) {
                        return [
                            $ts[$i] ?? NULL,
                            $open[$i] ?? NULL,
                            $high[$i] ?? NULL,
                            $low[$i] ?? NULL,
                            $close[$i] ?? NULL,
                            $adjustedClose[$i] ?? NULL,
                            $volume[$i] ?? NULL,
                        ];
                    }, array_keys($ts)),
                ]
            ]
        ];
    }

    protected function processEvents(?array $ts, ?object $events): array
    {
        $result = [];

        if (empty($ts) || empty($events)) {
            return $result;
        }

        
        $events = (array) $events;

        foreach ($events as $type => $eventData) {
            
            $eventData = (array) $eventData;

            $eventType = '';
            $valueKey = '';

            switch ($type) {
                case 'dividends':
                    $eventType = 'dividend';
                    $valueKey = 'amount';
                    break;
                case 'splits':
                    $eventType = 'split';
                    $valueKey = 'splitRatio';
                    break;

                
                default:
                    
                    continue 2;
            }

            $result = array_merge($result, array_map(function ($event) use ($ts, $eventType, $valueKey) {
                return [
                    'type'          => $eventType,
                    'date'          => $event->date * 1000,
                    'value'         => $event->$valueKey,
                    'series_index'  => array_search($event->date, $ts, true) ?: 0,
                ];
            }, $eventData));
        }

        return $result;
    }

    protected function processFinancialReportMetric($data)
    {
        $result = [];
        $metricId = Helper::value($data, 'meta.type.0');

        if ($metricId && is_string($metricId) && isset($data->$metricId) && isset($data->timestamp) && is_array($data->timestamp)) {
            $metricType = $this->params['interval'];
            $metricKey = Helper::camelToSnakeCase(str_replace($metricType, '', $metricId));

            foreach ($data->timestamp as $i => $ts) {
                $result[$metricKey][] = Helper::value($data, "$metricId.$i.reportedValue.raw");
            }
        }

        return $result;
    }

    protected function processOptionExpirationDates($dates)
    {
        $dates = $this->mapSecondsToMilliseconds($dates);

        return isset($this->params['expiration_date'])
            ? $this->params['expiration_date'] * 1000
            : (!empty($dates) ? $dates[0] : NULL);
    }

    protected function mapSecondsToMilliseconds($dates)
    {
        return array_map(function ($date) {
            return $date * 1000;
        }, $dates);
    }

    protected function processOptionCallsOrPuts($data): array
    {
        $map = function ($option) {
            return [
                'contract_symbol' => Helper::value($option, 'contractSymbol'),
                'currency' => Helper::value($option, 'currency'),
                'bid' => Helper::value($option, 'bid.raw'),
                'ask' => Helper::value($option, 'ask.raw'),
                'price' => Helper::value($option, 'lastPrice.raw'),
                'change_abs' => Helper::value($option, 'change.raw'),
                'change_pct' => Helper::value($option, 'percentChange.raw') / 100,
                'strike' => Helper::value($option, 'strike.raw'),
                'volume' => Helper::value($option, 'volume.raw'),
                'open_interest' => Helper::value($option, 'openInterest.raw'),
                'in_the_money' => Helper::value($option, 'inTheMoney'),
                'implied_volatility' => Helper::value($option, 'impliedVolatility.raw'),
                'last_trade_date' => Helper::value($option, 'lastTradeDate.raw') * 1000,
                'contract_size' => ucwords(strtolower(Helper::value($option, 'contractSize'))),
            ];
        };

        return array_map($map, $data);
    }

    protected function processOptionCallsAndPuts($calls, $puts): array
    {
        return array_merge(
            array_map(function ($option) {
                return array_merge($option, ['type' => 'Call']);
            }, $this->processOptionCallsOrPuts($calls)),
            array_map(function ($option) {
                return array_merge($option, ['type' => 'Put']);
            }, $this->processOptionCallsOrPuts($puts))
        );
    }

    protected function evaluateFormula($data, $formula)
    {
        $value = NULL;

        
        if ($formulaWithSubstitutedVars = preg_replace_callback(
            '#{([a-z0-9_.]+)}#i',
            function ($matches) use ($data) {
                return Helper::value($data, $matches[1]);
            },
            $formula)
        ) {
            
            try {
                
                $value = @eval(sprintf('return %s;', $formulaWithSubstitutedVars));
                
            } catch (\Throwable $e) {
                $value = NULL;
            }
        }

        return $value;
    }

    protected function getValueA()
    {
        return $this->creds['a'] ?? NULL;
    }

    protected function getValueB()
    {
        return $this->creds['b'] ?? NULL;
    }
}

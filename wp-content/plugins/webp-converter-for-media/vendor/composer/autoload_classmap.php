<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'WebpConverterVendor\\MattPlugins\\DeactivationModal\\Exception\\DuplicatedFormOptionKeyException' => $baseDir . '/vendor_prefixed/src/Exception/DuplicatedFormOptionKeyException.php',
    'WebpConverterVendor\\MattPlugins\\DeactivationModal\\Exception\\DuplicatedFormValueKeyException' => $baseDir . '/vendor_prefixed/src/Exception/DuplicatedFormValueKeyException.php',
    'WebpConverterVendor\\MattPlugins\\DeactivationModal\\Exception\\UnknownFormOptionKeyException' => $baseDir . '/vendor_prefixed/src/Exception/UnknownFormOptionKeyException.php',
    'WebpConverterVendor\\MattPlugins\\DeactivationModal\\Hookable' => $baseDir . '/vendor_prefixed/src/Hookable.php',
    'WebpConverterVendor\\MattPlugins\\DeactivationModal\\Modal' => $baseDir . '/vendor_prefixed/src/Modal.php',
    'WebpConverterVendor\\MattPlugins\\DeactivationModal\\Model\\FormOption' => $baseDir . '/vendor_prefixed/src/Model/FormOption.php',
    'WebpConverterVendor\\MattPlugins\\DeactivationModal\\Model\\FormOptions' => $baseDir . '/vendor_prefixed/src/Model/FormOptions.php',
    'WebpConverterVendor\\MattPlugins\\DeactivationModal\\Model\\FormTemplate' => $baseDir . '/vendor_prefixed/src/Model/FormTemplate.php',
    'WebpConverterVendor\\MattPlugins\\DeactivationModal\\Model\\FormValue' => $baseDir . '/vendor_prefixed/src/Model/FormValue.php',
    'WebpConverterVendor\\MattPlugins\\DeactivationModal\\Model\\FormValues' => $baseDir . '/vendor_prefixed/src/Model/FormValues.php',
    'WebpConverterVendor\\MattPlugins\\DeactivationModal\\Model\\RequestData' => $baseDir . '/vendor_prefixed/src/Model/RequestData.php',
    'WebpConverterVendor\\MattPlugins\\DeactivationModal\\Service\\AssetsPrinterService' => $baseDir . '/vendor_prefixed/src/Service/AssetsPrinterService.php',
    'WebpConverterVendor\\MattPlugins\\DeactivationModal\\Service\\TemplateGeneratorService' => $baseDir . '/vendor_prefixed/src/Service/TemplateGeneratorService.php',
    'WebpConverter\\Action\\ConvertAttachment' => $baseDir . '/src/Action/ConvertAttachment.php',
    'WebpConverter\\Action\\ConvertPaths' => $baseDir . '/src/Action/ConvertPaths.php',
    'WebpConverter\\Action\\DeletePaths' => $baseDir . '/src/Action/DeletePaths.php',
    'WebpConverter\\Conversion\\Cron\\CronEventGenerator' => $baseDir . '/src/Conversion/Cron/CronEventGenerator.php',
    'WebpConverter\\Conversion\\Cron\\CronInitiator' => $baseDir . '/src/Conversion/Cron/CronInitiator.php',
    'WebpConverter\\Conversion\\Cron\\CronSchedulesGenerator' => $baseDir . '/src/Conversion/Cron/CronSchedulesGenerator.php',
    'WebpConverter\\Conversion\\Cron\\CronStatusManager' => $baseDir . '/src/Conversion/Cron/CronStatusManager.php',
    'WebpConverter\\Conversion\\Cron\\CronStatusViewer' => $baseDir . '/src/Conversion/Cron/CronStatusViewer.php',
    'WebpConverter\\Conversion\\DirectoryFilesFinder' => $baseDir . '/src/Conversion/DirectoryFilesFinder.php',
    'WebpConverter\\Conversion\\Directory\\DirectoryAbstract' => $baseDir . '/src/Conversion/Directory/DirectoryAbstract.php',
    'WebpConverter\\Conversion\\Directory\\DirectoryFactory' => $baseDir . '/src/Conversion/Directory/DirectoryFactory.php',
    'WebpConverter\\Conversion\\Directory\\DirectoryIntegration' => $baseDir . '/src/Conversion/Directory/DirectoryIntegration.php',
    'WebpConverter\\Conversion\\Directory\\DirectoryInterface' => $baseDir . '/src/Conversion/Directory/DirectoryInterface.php',
    'WebpConverter\\Conversion\\Directory\\SourceDirectory' => $baseDir . '/src/Conversion/Directory/SourceDirectory.php',
    'WebpConverter\\Conversion\\Directory\\UploadsWebpcDirectory' => $baseDir . '/src/Conversion/Directory/UploadsWebpcDirectory.php',
    'WebpConverter\\Conversion\\Endpoint\\CronConversionEndpoint' => $baseDir . '/src/Conversion/Endpoint/CronConversionEndpoint.php',
    'WebpConverter\\Conversion\\Endpoint\\EndpointAbstract' => $baseDir . '/src/Conversion/Endpoint/EndpointAbstract.php',
    'WebpConverter\\Conversion\\Endpoint\\EndpointIntegration' => $baseDir . '/src/Conversion/Endpoint/EndpointIntegration.php',
    'WebpConverter\\Conversion\\Endpoint\\EndpointInterface' => $baseDir . '/src/Conversion/Endpoint/EndpointInterface.php',
    'WebpConverter\\Conversion\\Endpoint\\FilesStatsEndpoint' => $baseDir . '/src/Conversion/Endpoint/FilesStatsEndpoint.php',
    'WebpConverter\\Conversion\\Endpoint\\PathsEndpoint' => $baseDir . '/src/Conversion/Endpoint/PathsEndpoint.php',
    'WebpConverter\\Conversion\\Endpoint\\RegenerateEndpoint' => $baseDir . '/src/Conversion/Endpoint/RegenerateEndpoint.php',
    'WebpConverter\\Conversion\\FilesTreeFinder' => $baseDir . '/src/Conversion/FilesTreeFinder.php',
    'WebpConverter\\Conversion\\Format\\AvifFormat' => $baseDir . '/src/Conversion/Format/AvifFormat.php',
    'WebpConverter\\Conversion\\Format\\FormatAbstract' => $baseDir . '/src/Conversion/Format/FormatAbstract.php',
    'WebpConverter\\Conversion\\Format\\FormatFactory' => $baseDir . '/src/Conversion/Format/FormatFactory.php',
    'WebpConverter\\Conversion\\Format\\FormatInterface' => $baseDir . '/src/Conversion/Format/FormatInterface.php',
    'WebpConverter\\Conversion\\Format\\WebpFormat' => $baseDir . '/src/Conversion/Format/WebpFormat.php',
    'WebpConverter\\Conversion\\Media\\Attachment' => $baseDir . '/src/Conversion/Media/Attachment.php',
    'WebpConverter\\Conversion\\Media\\Delete' => $baseDir . '/src/Conversion/Media/Delete.php',
    'WebpConverter\\Conversion\\Media\\Upload' => $baseDir . '/src/Conversion/Media/Upload.php',
    'WebpConverter\\Conversion\\Method\\GdMethod' => $baseDir . '/src/Conversion/Method/GdMethod.php',
    'WebpConverter\\Conversion\\Method\\ImagickMethod' => $baseDir . '/src/Conversion/Method/ImagickMethod.php',
    'WebpConverter\\Conversion\\Method\\LibraryMethodAbstract' => $baseDir . '/src/Conversion/Method/LibraryMethodAbstract.php',
    'WebpConverter\\Conversion\\Method\\LibraryMethodInterface' => $baseDir . '/src/Conversion/Method/LibraryMethodInterface.php',
    'WebpConverter\\Conversion\\Method\\MethodAbstract' => $baseDir . '/src/Conversion/Method/MethodAbstract.php',
    'WebpConverter\\Conversion\\Method\\MethodFactory' => $baseDir . '/src/Conversion/Method/MethodFactory.php',
    'WebpConverter\\Conversion\\Method\\MethodIntegrator' => $baseDir . '/src/Conversion/Method/MethodIntegrator.php',
    'WebpConverter\\Conversion\\Method\\MethodInterface' => $baseDir . '/src/Conversion/Method/MethodInterface.php',
    'WebpConverter\\Conversion\\Method\\RemoteMethod' => $baseDir . '/src/Conversion/Method/RemoteMethod.php',
    'WebpConverter\\Conversion\\OutputPath' => $baseDir . '/src/Conversion/OutputPath.php',
    'WebpConverter\\Conversion\\PathsFinder' => $baseDir . '/src/Conversion/PathsFinder.php',
    'WebpConverter\\Conversion\\SkipCrashed' => $baseDir . '/src/Conversion/SkipCrashed.php',
    'WebpConverter\\Conversion\\SkipExcludedPaths' => $baseDir . '/src/Conversion/SkipExcludedPaths.php',
    'WebpConverter\\Conversion\\SkipLarger' => $baseDir . '/src/Conversion/SkipLarger.php',
    'WebpConverter\\Error\\Detector\\ErrorDetector' => $baseDir . '/src/Error/Detector/ErrorDetector.php',
    'WebpConverter\\Error\\Detector\\LibsNotInstalledDetector' => $baseDir . '/src/Error/Detector/LibsNotInstalledDetector.php',
    'WebpConverter\\Error\\Detector\\LibsWithoutWebpSupportDetector' => $baseDir . '/src/Error/Detector/LibsWithoutWebpSupportDetector.php',
    'WebpConverter\\Error\\Detector\\PassthruExecutionDetector' => $baseDir . '/src/Error/Detector/PassthruExecutionDetector.php',
    'WebpConverter\\Error\\Detector\\PathsErrorsDetector' => $baseDir . '/src/Error/Detector/PathsErrorsDetector.php',
    'WebpConverter\\Error\\Detector\\RestApiDisabledDetector' => $baseDir . '/src/Error/Detector/RestApiDisabledDetector.php',
    'WebpConverter\\Error\\Detector\\RewritesErrorsDetector' => $baseDir . '/src/Error/Detector/RewritesErrorsDetector.php',
    'WebpConverter\\Error\\Detector\\SettingsIncorrectDetector' => $baseDir . '/src/Error/Detector/SettingsIncorrectDetector.php',
    'WebpConverter\\Error\\Detector\\TokenStatusDetector' => $baseDir . '/src/Error/Detector/TokenStatusDetector.php',
    'WebpConverter\\Error\\Detector\\WebpFormatActivatedDetector' => $baseDir . '/src/Error/Detector/WebpFormatActivatedDetector.php',
    'WebpConverter\\Error\\ErrorDetectorAggregator' => $baseDir . '/src/Error/ErrorDetectorAggregator.php',
    'WebpConverter\\Error\\Notice\\AccessTokenInvalidNotice' => $baseDir . '/src/Error/Notice/AccessTokenInvalidNotice.php',
    'WebpConverter\\Error\\Notice\\ApiLimitExceededNotice' => $baseDir . '/src/Error/Notice/ApiLimitExceededNotice.php',
    'WebpConverter\\Error\\Notice\\BypassingApacheNotice' => $baseDir . '/src/Error/Notice/BypassingApacheNotice.php',
    'WebpConverter\\Error\\Notice\\ErrorNotice' => $baseDir . '/src/Error/Notice/ErrorNotice.php',
    'WebpConverter\\Error\\Notice\\LibsNotInstalledNotice' => $baseDir . '/src/Error/Notice/LibsNotInstalledNotice.php',
    'WebpConverter\\Error\\Notice\\LibsWithoutWebpSupportNotice' => $baseDir . '/src/Error/Notice/LibsWithoutWebpSupportNotice.php',
    'WebpConverter\\Error\\Notice\\PassthruExecutionNotice' => $baseDir . '/src/Error/Notice/PassthruExecutionNotice.php',
    'WebpConverter\\Error\\Notice\\PassthruNotWorkingNotice' => $baseDir . '/src/Error/Notice/PassthruNotWorkingNotice.php',
    'WebpConverter\\Error\\Notice\\PathHtaccessNotWritableNotice' => $baseDir . '/src/Error/Notice/PathHtaccessNotWritableNotice.php',
    'WebpConverter\\Error\\Notice\\PathUploadsUnavailableNotice' => $baseDir . '/src/Error/Notice/PathUploadsUnavailableNotice.php',
    'WebpConverter\\Error\\Notice\\PathWebpDuplicatedNotice' => $baseDir . '/src/Error/Notice/PathWebpDuplicatedNotice.php',
    'WebpConverter\\Error\\Notice\\PathWebpNotWritableNotice' => $baseDir . '/src/Error/Notice/PathWebpNotWritableNotice.php',
    'WebpConverter\\Error\\Notice\\RestApiDisabledNotice' => $baseDir . '/src/Error/Notice/RestApiDisabledNotice.php',
    'WebpConverter\\Error\\Notice\\RewritesCachedNotice' => $baseDir . '/src/Error/Notice/RewritesCachedNotice.php',
    'WebpConverter\\Error\\Notice\\RewritesNotExecutedNotice' => $baseDir . '/src/Error/Notice/RewritesNotExecutedNotice.php',
    'WebpConverter\\Error\\Notice\\RewritesNotWorkingNotice' => $baseDir . '/src/Error/Notice/RewritesNotWorkingNotice.php',
    'WebpConverter\\Error\\Notice\\SettingsIncorrectNotice' => $baseDir . '/src/Error/Notice/SettingsIncorrectNotice.php',
    'WebpConverter\\Error\\Notice\\WebpRequiredNotice' => $baseDir . '/src/Error/Notice/WebpRequiredNotice.php',
    'WebpConverter\\Exception\\ConversionErrorException' => $baseDir . '/src/Exception/ConversionErrorException.php',
    'WebpConverter\\Exception\\ExceptionAbstract' => $baseDir . '/src/Exception/ExceptionAbstract.php',
    'WebpConverter\\Exception\\ExceptionInterface' => $baseDir . '/src/Exception/ExceptionInterface.php',
    'WebpConverter\\Exception\\ExtensionUnsupportedException' => $baseDir . '/src/Exception/ExtensionUnsupportedException.php',
    'WebpConverter\\Exception\\FilesizeOversizeException' => $baseDir . '/src/Exception/FilesizeOversizeException.php',
    'WebpConverter\\Exception\\FunctionUnavailableException' => $baseDir . '/src/Exception/FunctionUnavailableException.php',
    'WebpConverter\\Exception\\ImageAnimatedException' => $baseDir . '/src/Exception/ImageAnimatedException.php',
    'WebpConverter\\Exception\\ImageInvalidException' => $baseDir . '/src/Exception/ImageInvalidException.php',
    'WebpConverter\\Exception\\ImagickNotSupportWebpException' => $baseDir . '/src/Exception/ImagickNotSupportWebpException.php',
    'WebpConverter\\Exception\\ImagickUnavailableException' => $baseDir . '/src/Exception/ImagickUnavailableException.php',
    'WebpConverter\\Exception\\LargerThanOriginalException' => $baseDir . '/src/Exception/LargerThanOriginalException.php',
    'WebpConverter\\Exception\\OutputPathException' => $baseDir . '/src/Exception/OutputPathException.php',
    'WebpConverter\\Exception\\RemoteErrorResponseException' => $baseDir . '/src/Exception/RemoteErrorResponseException.php',
    'WebpConverter\\Exception\\RemoteRequestException' => $baseDir . '/src/Exception/RemoteRequestException.php',
    'WebpConverter\\Exception\\ResolutionOversizeException' => $baseDir . '/src/Exception/ResolutionOversizeException.php',
    'WebpConverter\\Exception\\ServerConfigurationException' => $baseDir . '/src/Exception/ServerConfigurationException.php',
    'WebpConverter\\Exception\\SourcePathException' => $baseDir . '/src/Exception/SourcePathException.php',
    'WebpConverter\\HookableInterface' => $baseDir . '/src/HookableInterface.php',
    'WebpConverter\\Loader\\HtaccessLoader' => $baseDir . '/src/Loader/HtaccessLoader.php',
    'WebpConverter\\Loader\\LoaderAbstract' => $baseDir . '/src/Loader/LoaderAbstract.php',
    'WebpConverter\\Loader\\LoaderIntegration' => $baseDir . '/src/Loader/LoaderIntegration.php',
    'WebpConverter\\Loader\\LoaderInterface' => $baseDir . '/src/Loader/LoaderInterface.php',
    'WebpConverter\\Loader\\PassthruLoader' => $baseDir . '/src/Loader/PassthruLoader.php',
    'WebpConverter\\Model\\Token' => $baseDir . '/src/Model/Token.php',
    'WebpConverter\\Notice\\BlackFridayNotice' => $baseDir . '/src/Notice/BlackFridayNotice.php',
    'WebpConverter\\Notice\\CloudflareNotice' => $baseDir . '/src/Notice/CloudflareNotice.php',
    'WebpConverter\\Notice\\LitespeedNotice' => $baseDir . '/src/Notice/LitespeedNotice.php',
    'WebpConverter\\Notice\\NoticeAbstract' => $baseDir . '/src/Notice/NoticeAbstract.php',
    'WebpConverter\\Notice\\NoticeIntegration' => $baseDir . '/src/Notice/NoticeIntegration.php',
    'WebpConverter\\Notice\\NoticeInterface' => $baseDir . '/src/Notice/NoticeInterface.php',
    'WebpConverter\\Notice\\ThanksNotice' => $baseDir . '/src/Notice/ThanksNotice.php',
    'WebpConverter\\Notice\\UpgradeNotice' => $baseDir . '/src/Notice/UpgradeNotice.php',
    'WebpConverter\\Notice\\WelcomeNotice' => $baseDir . '/src/Notice/WelcomeNotice.php',
    'WebpConverter\\PluginData' => $baseDir . '/src/PluginData.php',
    'WebpConverter\\PluginInfo' => $baseDir . '/src/PluginInfo.php',
    'WebpConverter\\Plugin\\Activation' => $baseDir . '/src/Plugin/Activation.php',
    'WebpConverter\\Plugin\\Activation\\DefaultSettings' => $baseDir . '/src/Plugin/Activation/DefaultSettings.php',
    'WebpConverter\\Plugin\\Activation\\RefreshLoader' => $baseDir . '/src/Plugin/Activation/RefreshLoader.php',
    'WebpConverter\\Plugin\\Activation\\WebpDirectory' => $baseDir . '/src/Plugin/Activation/WebpDirectory.php',
    'WebpConverter\\Plugin\\Deactivation' => $baseDir . '/src/Plugin/Deactivation.php',
    'WebpConverter\\Plugin\\Deactivation\\CronReset' => $baseDir . '/src/Plugin/Deactivation/CronReset.php',
    'WebpConverter\\Plugin\\Deactivation\\PluginSettings' => $baseDir . '/src/Plugin/Deactivation/PluginSettings.php',
    'WebpConverter\\Plugin\\Deactivation\\RefreshLoader' => $baseDir . '/src/Plugin/Deactivation/RefreshLoader.php',
    'WebpConverter\\Plugin\\Links' => $baseDir . '/src/Plugin/Links.php',
    'WebpConverter\\Plugin\\Uninstall' => $baseDir . '/src/Plugin/Uninstall.php',
    'WebpConverter\\Plugin\\Uninstall\\DebugFiles' => $baseDir . '/src/Plugin/Uninstall/DebugFiles.php',
    'WebpConverter\\Plugin\\Uninstall\\PluginSettings' => $baseDir . '/src/Plugin/Uninstall/PluginSettings.php',
    'WebpConverter\\Plugin\\Uninstall\\WebpFiles' => $baseDir . '/src/Plugin/Uninstall/WebpFiles.php',
    'WebpConverter\\Plugin\\Update' => $baseDir . '/src/Plugin/Update.php',
    'WebpConverter\\Repository\\TokenRepository' => $baseDir . '/src/Repository/TokenRepository.php',
    'WebpConverter\\Service\\BackupExcluder' => $baseDir . '/src/Service/BackupExcluder.php',
    'WebpConverter\\Service\\DeactivationModalGenerator' => $baseDir . '/src/Service/DeactivationModalGenerator.php',
    'WebpConverter\\Service\\FileLoader' => $baseDir . '/src/Service/FileLoader.php',
    'WebpConverter\\Service\\MediaStatusViewer' => $baseDir . '/src/Service/MediaStatusViewer.php',
    'WebpConverter\\Service\\OptionsAccessManager' => $baseDir . '/src/Service/OptionsAccessManager.php',
    'WebpConverter\\Service\\PathsGenerator' => $baseDir . '/src/Service/PathsGenerator.php',
    'WebpConverter\\Service\\RestApiUnlocker' => $baseDir . '/src/Service/RestApiUnlocker.php',
    'WebpConverter\\Service\\ServerConfigurator' => $baseDir . '/src/Service/ServerConfigurator.php',
    'WebpConverter\\Service\\StatsManager' => $baseDir . '/src/Service/StatsManager.php',
    'WebpConverter\\Service\\TokenValidator' => $baseDir . '/src/Service/TokenValidator.php',
    'WebpConverter\\Service\\ViewLoader' => $baseDir . '/src/Service/ViewLoader.php',
    'WebpConverter\\Service\\WpCliManager' => $baseDir . '/src/Service/WpCliManager.php',
    'WebpConverter\\Settings\\AdminAssets' => $baseDir . '/src/Settings/AdminAssets.php',
    'WebpConverter\\Settings\\Option\\AccessTokenOption' => $baseDir . '/src/Settings/Option/AccessTokenOption.php',
    'WebpConverter\\Settings\\Option\\AutoConversionOption' => $baseDir . '/src/Settings/Option/AutoConversionOption.php',
    'WebpConverter\\Settings\\Option\\ConversionMethodOption' => $baseDir . '/src/Settings/Option/ConversionMethodOption.php',
    'WebpConverter\\Settings\\Option\\ExcludedDirectoriesOption' => $baseDir . '/src/Settings/Option/ExcludedDirectoriesOption.php',
    'WebpConverter\\Settings\\Option\\ExtraFeaturesOption' => $baseDir . '/src/Settings/Option/ExtraFeaturesOption.php',
    'WebpConverter\\Settings\\Option\\ImageResizeOption' => $baseDir . '/src/Settings/Option/ImageResizeOption.php',
    'WebpConverter\\Settings\\Option\\ImagesQualityOption' => $baseDir . '/src/Settings/Option/ImagesQualityOption.php',
    'WebpConverter\\Settings\\Option\\LoaderTypeOption' => $baseDir . '/src/Settings/Option/LoaderTypeOption.php',
    'WebpConverter\\Settings\\Option\\MediaStatsOption' => $baseDir . '/src/Settings/Option/MediaStatsOption.php',
    'WebpConverter\\Settings\\Option\\OptionAbstract' => $baseDir . '/src/Settings/Option/OptionAbstract.php',
    'WebpConverter\\Settings\\Option\\OptionIntegration' => $baseDir . '/src/Settings/Option/OptionIntegration.php',
    'WebpConverter\\Settings\\Option\\OptionInterface' => $baseDir . '/src/Settings/Option/OptionInterface.php',
    'WebpConverter\\Settings\\Option\\OptionsAggregator' => $baseDir . '/src/Settings/Option/OptionsAggregator.php',
    'WebpConverter\\Settings\\Option\\OutputFormatsOption' => $baseDir . '/src/Settings/Option/OutputFormatsOption.php',
    'WebpConverter\\Settings\\Option\\SupportedDirectoriesOption' => $baseDir . '/src/Settings/Option/SupportedDirectoriesOption.php',
    'WebpConverter\\Settings\\Option\\SupportedExtensionsOption' => $baseDir . '/src/Settings/Option/SupportedExtensionsOption.php',
    'WebpConverter\\Settings\\Page\\AdvancedSettingsPage' => $baseDir . '/src/Settings/Page/AdvancedSettingsPage.php',
    'WebpConverter\\Settings\\Page\\BulkOptimizationPage' => $baseDir . '/src/Settings/Page/BulkOptimizationPage.php',
    'WebpConverter\\Settings\\Page\\DebugPage' => $baseDir . '/src/Settings/Page/DebugPage.php',
    'WebpConverter\\Settings\\Page\\GeneralSettingsPage' => $baseDir . '/src/Settings/Page/GeneralSettingsPage.php',
    'WebpConverter\\Settings\\Page\\PageAbstract' => $baseDir . '/src/Settings/Page/PageAbstract.php',
    'WebpConverter\\Settings\\Page\\PageIntegration' => $baseDir . '/src/Settings/Page/PageIntegration.php',
    'WebpConverter\\Settings\\Page\\PageInterface' => $baseDir . '/src/Settings/Page/PageInterface.php',
    'WebpConverter\\Settings\\PluginOptions' => $baseDir . '/src/Settings/PluginOptions.php',
    'WebpConverter\\Settings\\SettingsSave' => $baseDir . '/src/Settings/SettingsSave.php',
    'WebpConverter\\WebpConverter' => $baseDir . '/src/WebpConverter.php',
    'WebpConverter\\WebpConverterConstants' => $baseDir . '/src/WebpConverterConstants.php',
);

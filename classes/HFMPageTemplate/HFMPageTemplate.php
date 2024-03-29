<?php

final class HFMPageTemplate {

    /**
     * @return void
     */
    static function CBInstall_install(): void {
        CBModelTemplateCatalog::install(__CLASS__);
        CBModelTemplateCatalog::installLivePageTemplate(__CLASS__);
    }

    /**
     * @return [string]
     */
    static function CBInstall_requiredClassNames(): array {
        return ['CBModelTemplateCatalog'];
    }

    /**
     * @return model
     */
    static function CBModelTemplate_spec(): stdClass {
        return (object)[
            'className' => 'CBViewPage',
            'classNameForSettings' => 'HFMPageSettings',
            'frameClassName' => 'HFMPageFrame',
            'sections' => [
                (object)[
                    'className' => 'CBPageTitleAndDescriptionView',
                ],
                (object)[
                    'className' => 'CBArtworkView',
                ],
                (object)[
                    'className' => 'CBMessageView',
                ],
            ],
        ];
    }

    /**
     * @return string
     */
    static function CBModelTemplate_title(): string {
        return 'Page';
    }
}

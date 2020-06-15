<?php

final class HFMPage_blog {

    /**
     * @return void
     */
    static function CBInstall_configure(): void {
        HFMPage_blog::installPage();
        HFMPage_blog::installMenuItem();
    }

    /**
     * @return ID
     */
    static function ID(): string {
        return '5ddc2e2106014a47f6f5cb28258956c82138af3b';
    }

    /**
     * @return void
     */
    private static function installMenuItem(): void {
        $updater = CBModelUpdater::fetch(
            (object)[
                'ID' => HFMMenu_main::ID(),
            ]
        );

        $menuSpec = $updater->working;

        CBMenu::addOrReplaceItem(
            $menuSpec,
            (object)[
                'className' => 'CBMenuItem',
                'name' => 'blog',
                'text' => 'Blog',
                'URL' => '/blog/',
            ]
        );

        CBModelUpdater::save($updater);
    }

    /**
     * @return void
     */
    private static function installPage(): void {
        $updater = CBModelUpdater::fetch(
            CBModelTemplateCatalog::fetchLivePageTemplate(
                (object)[
                    'ID' => HFMPage_blog::ID(),
                    'classNameForKind' => 'HFMGeneratedPageKind',
                    'isPublished' => true,
                    'selectedMenuItemNames' => 'blog',
                    'title' => 'Blog',
                    'URI' => 'blog',
                ]
            )
        );

        $pageSpec = $updater->working;

        /* publicationTimeStamp */

        if (CBModel::valueAsInt($pageSpec, 'publicationTimeStamp') === null) {
            $pageSpec->publicationTimeStamp = time();
        }

        /* page title and description view */

        $sourceID = '36a63d2d01a677c54a1dd44429a02872affcdda6';

        CBSubviewUpdater::unshift(
            $pageSpec,
            'sourceID',
            $sourceID,
            (object)[
                'className' => 'CBPageTitleAndDescriptionView',
                'sourceID' => $sourceID,
            ]
        );

        /* page list view */

        $sourceID = '3767a1f17818786389f7823d50d34195ba87b1f5';

        CBSubviewUpdater::push(
            $pageSpec,
            'sourceID',
            $sourceID,
            (object)[
                'className' => 'CBPageListView2',
                'classNameForKind' => 'HFMBlogPostPageKind',
                'sourceID' => $sourceID,
            ]
        );

        /* save */

        CBModelUpdater::save($updater);
    }
}

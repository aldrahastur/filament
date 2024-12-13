<?php

namespace Livewire\Features\SupportTesting {

    /**
     * @template-covariant T of object
     */
    class Testable {
        /**
         * @return T
         */
        public function mountInfolistAction(string $component, string | array $name, string $infolistName = 'infolist') {}

        /**
         * @return T
         */
        public function unmountInfolistAction() {}

        /**
         * @return T
         */
        public function setInfolistActionData(array $data) {}

        /**
         * @return T
         */
        public function assertInfolistActionDataSet(array $data) {}

        /**
         * @return T
         */
        public function callInfolistAction(string $component, string | array $name, array $data = [], array $arguments = [], string $infolistName = 'infolist') {}

        /**
         * @return T
         */
        public function callMountedInfolistAction(array $arguments = []) {}

        /**
         * @return T
         */
        public function assertInfolistActionExists(string $component, string | array $name, string $infolistName = 'infolist') {}

        /**
         * @return T
         */
        public function assertInfolistActionDoesNotExist(string $component, string | array $name, string $infolistName = 'infolist') {}

        /**
         * @return T
         */
        public function assertInfolistActionVisible(string $component, string | array $name, string $infolistName = 'infolist') {}

        /**
         * @return T
         */
        public function assertInfolistActionHidden(string $component, string | array $name, string $infolistName = 'infolist') {}

        /**
         * @return T
         */
        public function assertInfolistActionEnabled(string $component, string | array $name, string $infolistName = 'infolist') {}

        /**
         * @return T
         */
        public function assertInfolistActionDisabled(string $component, string | array $name, string $infolistName = 'infolist') {}

        /**
         * @return T
         */
        public function assertInfolistActionMounted(string $component, string | array $name, string $infolistName = 'infolist') {}

        /**
         * @return T
         */
        public function assertInfolistActionNotMounted(string $component, string | array $name, string $infolistName = 'infolist') {}

        /**
         * @return T
         */
        public function assertInfolistActionHalted(string $component, string | array $name, string $infolistName = 'infolist') {}

        /**
         * @return T
         */
        public function assertHasInfolistActionErrors(array $keys = []) {}

        /**
         * @return T
         */
        public function assertHasNoInfolistActionErrors(array $keys = []) {}

        /**
         * @return T
         */
        public function assertInfolistActionHasIcon(string $component, string | array $name, string $icon, string $infolistName = 'infolist') {}

        /**
         * @return T
         */
        public function assertInfolistActionDoesNotHaveIcon(string $component, string | array $name, string $icon, string $infolistName = 'infolist') {}

        /**
         * @return T
         */
        public function assertInfolistActionHasLabel(string $component, string | array $name, string $label, string $infolistName = 'infolist') {}

        /**
         * @return T
         */
        public function assertInfolistActionDoesNotHaveLabel(string $component, string | array $name, string $label, string $infolistName = 'infolist') {}

        /**
         * @return T
         */
        public function assertInfolistActionHasColor(string $component, string | array $name, string | array $color, string $infolistName = 'infolist') {}

        /**
         * @return T
         */
        public function assertInfolistActionDoesNotHaveColor(string $component, string | array $name, string | array $color, string $infolistName = 'infolist') {}

        /**
         * @return T
         */
        public function assertInfolistActionHasUrl(string $component, string | array $name, string $url, string $infolistName = 'infolist') {}

        /**
         * @return T
         */
        public function assertInfolistActionDoesNotHaveUrl(string $component, string | array $name, string $url, string $infolistName = 'infolist') {}

        /**
         * @return T
         */
        public function assertInfolistActionShouldOpenUrlInNewTab(string $component, string | array $name, string $infolistName = 'infolist') {}

        /**
         * @return T
         */
        public function assertInfolistActionShouldNotOpenUrlInNewTab(string $component, string | array $name, string $infolistName = 'infolist') {}

        /**
         * @return T
         */
        public function getNestedInfolistActionComponentAndName(string $component, string | array $name, string $infolistName = 'infolist') {}

        /**
         * @return T
         */
        public function parseNestedInfolistActionComponentAndName(string $component, string | array $name, string $infolistName = 'infolist') {}
    }

}

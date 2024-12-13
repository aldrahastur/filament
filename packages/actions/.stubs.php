<?php

namespace Livewire\Features\SupportTesting {

    /**
     * @template-covariant T of object
     */
    class Testable {
        /**
         * @return T
         */
        public function mountAction(string | array $name, array $arguments = []) {}

        /**
         * @return T
         */
        public function unmountAction() {}

        /**
         * @return T
         */
        public function setActionData(array $data) {}

        /**
         * @return T
         */
        public function assertActionDataSet(array $data) {}

        /**
         * @return T
         */
        public function callAction(string | array $name, array $data = [], array $arguments = []) {}

        /**
         * @return T
         */
        public function callMountedAction(array $arguments = []) {}

        /**
         * @return T
         */
        public function assertActionExists(string | array $name) {}

        /**
         * @return T
         */
        public function assertActionDoesNotExist(string | array $name) {}

        /**
         * @return T
         */
        public function assertActionVisible(string | array $name, array $arguments = []) {}

        /**
         * @return T
         */
        public function assertActionHidden(string | array $name, array $arguments = []) {}

        /**
         * @return T
         */
        public function assertActionEnabled(string | array $name) {}

        /**
         * @return T
         */
        public function assertActionDisabled(string | array $name) {}

        /**
         * @return T
         */
        public function assertActionHasIcon(string | array $name, string $icon) {}

        /**
         * @return T
         */
        public function assertActionDoesNotHaveIcon(string | array $name, string $icon) {}

        /**
         * @return T
         */
        public function assertActionHasLabel(string | array $name, string $label) {}

        /**
         * @return T
         */
        public function assertActionHasColor(string | array $name, string $color) {}

        /**
         * @return T
         */
        public function assertActionDoesNotHaveColor(string | array $name, string $color) {}

        /**
         * @return T
         */
        public function assertActionHasUrl(string | array $name, string $url) {}

        /**
         * @return T
         */
        public function assertActionDoesNotHaveUrl(string | array $name, string $url) {}

        /**
         * @return T
         */
        public function assertActionShouldOpenUrlInNewTab(string | array $name) {}

        /**
         * @return T
         */
        public function assertActionShouldNotOpenUrlInNewTab(string | array $name) {}

        /**
         * @return T
         */
        public function assertActionDoesNotHaveLabel(string | array $name, string $label) {}

        /**
         * @return T
         */
        public function assertActionMounted(string | array $name) {}

        /**
         * @return T
         */
        public function assertActionNotMounted(string | array $name) {}

        /**
         * @return T
         */
        public function assertActionHalted(string | array $name) {}

        /**
         * @return T
         */
        public function assertHasActionErrors(array $keys = []) {}

        /**
         * @return T
         */
        public function assertHasNoActionErrors(array $keys = []) {}

        /**
         * @return T
         */
        public function parseActionName(string | array $name): string {}

        /**
         * @return T
         */
        public function parseNestedActionName(string | array $name): array {}
    }

}

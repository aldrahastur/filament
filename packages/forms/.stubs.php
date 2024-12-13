<?php

namespace Livewire\Features\SupportTesting {

    use Closure;

    /**
     * @template-covariant T of object
     */
    class Testable {
        /**
         * @return T
         */
        public function fillForm(array | Closure $state = [], string $formName = 'form') {}

        /**
         * @return T
         */
        public function assertFormSet(array | Closure $state, string $formName = 'form') {}

        /**
         * @return T
         */
        public function assertHasFormErrors(array $keys = [], string $formName = 'form') {}

        /**
         * @return T
         */
        public function assertHasNoFormErrors(array $keys = [], string $formName = 'form') {}

        /**
         * @return T
         */
        public function assertFormExists(string | array $name = 'form') {}

        /**
         * @return T
         */
        public function assertFormFieldExists(string $fieldName, string | Closure $formName = 'form', ?Closure $checkFieldUsing = null) {}

        /**
         * @return T
         */
        public function assertFormFieldDoesNotExist(string $fieldName, string $formName = 'form') {}

        /**
         * @return T
         */
        public function assertFormFieldIsDisabled(string $fieldName, string $formName = 'form') {}

        /**
         * @return T
         */
        public function assertFormFieldIsEnabled(string $fieldName, string $formName = 'form') {}

        /**
         * @return T
         */
        public function assertFormFieldIsHidden(string $fieldName, string $formName = 'form') {}

        /**
         * @return T
         */
        public function assertFormFieldIsVisible(string $fieldName, string $formName = 'form') {}

        /**
         * @return T
         */
        public function assertFormComponentExists(string $componentKey, string | Closure $formName = 'form', ?Closure $checkComponentUsing = null) {}

        /**
         * @return T
         */
        public function assertFormComponentDoesNotExist(string $componentKey, string $formName = 'form') {}

        /**
         * @return T
         */
        public function mountFormComponentAction(string | array $component, string | array $name, array $arguments = [], string $formName = 'form') {}

        /**
         * @return T
         */
        public function unmountFormComponentAction() {}

        /**
         * @return T
         */
        public function setFormComponentActionData(array $data) {}

        /**
         * @return T
         */
        public function assertFormComponentActionDataSet(array $data) {}

        /**
         * @return T
         */
        public function callFormComponentAction(string | array $component, string | array $name, array $data = [], array $arguments = [], string $formName = 'form') {}

        /**
         * @return T
         */
        public function callMountedFormComponentAction(array $arguments = []) {}

        /**
         * @return T
         */
        public function assertFormComponentActionExists(string | array $component, string | array $name, string $formName = 'form') {}

        /**
         * @return T
         */
        public function assertFormComponentActionDoesNotExist(string | array $component, string | array $name, string $formName = 'form') {}

        /**
         * @return T
         */
        public function assertFormComponentActionVisible(string | array $component, string | array $name, array $arguments = [], string $formName = 'form') {}

        /**
         * @return T
         */
        public function assertFormComponentActionHidden(string | array $component, string | array $name, array $arguments = [], string $formName = 'form') {}

        /**
         * @return T
         */
        public function assertFormComponentActionEnabled(string | array $component, string | array $name, array $arguments = [], string $formName = 'form') {}

        /**
         * @return T
         */
        public function assertFormComponentActionDisabled(string | array $component, string | array $name, array $arguments = [], string $formName = 'form') {}

        /**
         * @return T
         */
        public function assertFormComponentActionMounted(string | array $component, string | array $name, string $formName = 'form') {}

        /**
         * @return T
         */
        public function assertFormComponentActionNotMounted(string | array $component, string | array $name, string $formName = 'form') {}

        /**
         * @return T
         */
        public function assertFormComponentActionHalted(string | array $component, string | array $name, string $formName = 'form') {}

        /**
         * @return T
         */
        public function assertHasFormComponentActionErrors(array $keys = []) {}

        /**
         * @return T
         */
        public function assertHasNoFormComponentActionErrors(array $keys = []) {}

        /**
         * @return T
         */
        public function assertFormComponentActionHasIcon(string | array $component, string | array $name, string $icon, array $arguments = [], string $formName = 'form') {}

        /**
         * @return T
         */
        public function assertFormComponentActionDoesNotHaveIcon(string | array $component, string | array $name, string $icon, array $arguments = [], string $formName = 'form') {}

        /**
         * @return T
         */
        public function assertFormComponentActionHasLabel(string | array $component, string | array $name, string $label, array $arguments = [], string $formName = 'form') {}

        /**
         * @return T
         */
        public function assertFormComponentActionDoesNotHaveLabel(string | array $component, string | array $name, string $label, array $arguments = [], string $formName = 'form') {}

        /**
         * @return T
         */
        public function assertFormComponentActionHasColor(string | array $component, string | array $name, string | array $color, array $arguments = [], string $formName = 'form') {}

        /**
         * @return T
         */
        public function assertFormComponentActionDoesNotHaveColor(string | array $component, string | array $name, string | array $color, array $arguments = [], string $formName = 'form') {}

        /**
         * @return T
         */
        public function assertFormComponentActionHasUrl(string | array $component, string | array $name, string $url, array $arguments = [], string $formName = 'form') {}

        /**
         * @return T
         */
        public function assertFormComponentActionDoesNotHaveUrl(string | array $component, string | array $name, string $url, array $arguments = [], string $formName = 'form') {}

        /**
         * @return T
         */
        public function assertFormComponentActionShouldOpenUrlInNewTab(string | array $component, string | array $name, array $arguments = [], string $formName = 'form') {}

        /**
         * @return T
         */
        public function assertFormComponentActionShouldNotOpenUrlInNewTab(string | array $component, string | array $name, array $arguments = [], string $formName = 'form') {}

        /**
         * @return T
         */
        public function getNestedFormComponentActionComponentAndName(string | array $component, string | array $name, string $formName = 'form') {}

        /**
         * @return T
         */
        public function parseNestedFormComponentActionComponentAndName(string | array $component, string | array $name, string $formName = 'form') {}

        /**
         * @return T
         */
        public function goToWizardStep(int $step, string $formName = 'form') {}

        /**
         * @return T
         */
        public function goToNextWizardStep(string $formName = 'form') {}

        /**
         * @return T
         */
        public function goToPreviousWizardStep(string $formName = 'form') {}

        /**
         * @return T
         */
        public function assertWizardStepExists(int $step, string $formName = 'form') {}

        /**
         * @return T
         */
        public function assertWizardCurrentStep(int $step, string $formName = 'form') {}
    }

}

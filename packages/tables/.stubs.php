<?php

namespace Livewire\Features\SupportTesting {

    use Closure;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Collection;

    /**
     * @template-covariant T of object
     */
    class Testable {
        /**
         * @return T
         */
        public function mountTableAction(string | array $name, $record = null) {}

        /**
         * @return T
         */
        public function unmountTableAction() {}

        /**
         * @return T
         */
        public function setTableActionData(array $data) {}

        /**
         * @return T
         */
        public function assertTableActionDataSet(array $data) {}

        /**
         * @return T
         */
        public function callTableAction(string | array $name, $record = null, array $data = [], array $arguments = []) {}

        /**
         * @return T
         */
        public function callTableColumnAction(string $name, $record = null) {}

        /**
         * @return T
         */
        public function callMountedTableAction(array $arguments = []) {}

        /**
         * @return T
         */
        public function assertTableActionExists(string | array $name, ?Closure $checkActionUsing = null, $record = null) {}

        /**
         * @return T
         */
        public function assertTableActionDoesNotExist(string | array $name, ?Closure $checkActionUsing = null, $record = null) {}

        /**
         * @return T
         */
        public function assertTableActionsExistInOrder(array $names) {}

        /**
         * @return T
         */
        public function assertTableHeaderActionsExistInOrder(array $names) {}

        /**
         * @return T
         */
        public function assertTableEmptyStateActionsExistInOrder(array $names) {}

        /**
         * @return T
         */
        public function assertTableActionVisible(string | array $name, $record = null) {}

        /**
         * @return T
         */
        public function assertTableActionHidden(string | array $name, $record = null) {}

        /**
         * @return T
         */
        public function assertTableActionEnabled(string | array $name, $record = null) {}

        /**
         * @return T
         */
        public function assertTableActionDisabled(string | array $name, $record = null) {}

        /**
         * @return T
         */
        public function assertTableActionMounted(string | array $name) {}

        /**
         * @return T
         */
        public function assertTableActionNotMounted(string | array $name) {}

        /**
         * @return T
         */
        public function assertTableActionHalted(string | array $name) {}

        /**
         * @return T
         */
        public function assertHasTableActionErrors(array $keys = []) {}

        /**
         * @return T
         */
        public function assertHasNoTableActionErrors(array $keys = []) {}

        /**
         * @return T
         */
        public function mountTableBulkAction(string $name, array | Collection $records) {}

        /**
         * @return T
         */
        public function setTableBulkActionData(array $data) {}

        /**
         * @return T
         */
        public function assertTableBulkActionDataSet(array $data) {}

        /**
         * @return T
         */
        public function callTableBulkAction(string $name, array | Collection $records, array $data = [], array $arguments = []) {}

        /**
         * @return T
         */
        public function callMountedTableBulkAction(array $arguments = []) {}

        /**
         * @return T
         */
        public function assertTableBulkActionExists(string $name) {}

        /**
         * @return T
         */
        public function assertTableBulkActionDoesNotExist(string $name) {}

        /**
         * @return T
         */
        public function assertTableBulkActionsExistInOrder(array $names) {}

        /**
         * @return T
         */
        public function assertTableBulkActionVisible(string $name) {}

        /**
         * @return T
         */
        public function assertTableBulkActionHidden(string $name) {}

        /**
         * @return T
         */
        public function assertTableBulkActionEnabled(string $name) {}

        /**
         * @return T
         */
        public function assertTableBulkActionDisabled(string $name) {}

        /**
         * @return T
         */
        public function assertTableActionHasIcon(string | array $name, string $icon) {}

        /**
         * @return T
         */
        public function assertTableActionDoesNotHaveIcon(string | array $name, string $icon) {}

        /**
         * @return T
         */
        public function assertTableActionHasLabel(string | array $name, string $label) {}

        /**
         * @return T
         */
        public function assertTableActionDoesNotHaveLabel(string | array $name, string $label) {}

        /**
         * @return T
         */
        public function assertTableActionHasColor(string | array $name, string | array $color) {}

        /**
         * @return T
         */
        public function assertTableActionDoesNotHaveColor(string | array $name, string | array $color) {}

        /**
         * @return T
         */
        public function assertTableBulkActionHasIcon(string $name, string $icon) {}

        /**
         * @return T
         */
        public function assertTableBulkActionDoesNotHaveIcon(string $name, string $icon) {}

        /**
         * @return T
         */
        public function assertTableBulkActionHasLabel(string $name, string $label) {}

        /**
         * @return T
         */
        public function assertTableBulkActionDoesNotHaveLabel(string $name, string $label) {}

        /**
         * @return T
         */
        public function assertTableBulkActionHasColor(string $name, string | array $color) {}

        /**
         * @return T
         */
        public function assertTableBulkActionDoesNotHaveColor(string $name, string | array $color) {}

        /**
         * @return T
         */
        public function assertTableActionHasUrl(string | array $name, string $url) {}

        /**
         * @return T
         */
        public function assertTableActionDoesNotHaveUrl(string | array $name, string $url) {}

        /**
         * @return T
         */
        public function assertTableActionShouldOpenUrlInNewTab(string | array $name) {}

        /**
         * @return T
         */
        public function assertTableActionShouldNotOpenUrlInNewTab(string | array $name) {}

        /**
         * @return T
         */
        public function assertTableBulkActionMounted(string $name) {}

        /**
         * @return T
         */
        public function assertTableBulkActionNotMounted(string $name) {}

        /**
         * @return T
         */
        public function assertTableBulkActionHalted(string $name) {}

        /**
         * @return T
         */
        public function assertHasTableBulkActionErrors(array $keys = []) {}

        /**
         * @return T
         */
        public function assertHasNoTableBulkActionErrors(array $keys = []) {}

        /**
         * @return T
         */
        public function assertCanRenderTableColumn(string $name) {}

        /**
         * @return T
         */
        public function assertCanNotRenderTableColumn(string $name) {}

        /**
         * @return T
         */
        public function assertTableColumnExists(string $name, ?Closure $checkColumnUsing = null, $record = null) {}

        /**
         * @return T
         */
        public function assertTableColumnDoesNotExist(string $name, ?Closure $checkColumnUsing = null, $record = null) {}

        /**
         * @return T
         */
        public function assertTableColumnVisible(string $name) {}

        /**
         * @return T
         */
        public function assertTableColumnHidden(string $name) {}

        /**
         * @return T
         */
        public function assertTableColumnStateSet(string $name, $value, $record) {}

        /**
         * @return T
         */
        public function assertTableColumnStateNotSet(string $name, $value, $record) {}

        /**
         * @return T
         */
        public function assertTableColumnSummarizerExists(string $columnName, string $summarizerId) {}

        /**
         * @return T
         */
        public function assertTableColumnSummarySet(string $columnName, string $summarizerId, $state, bool $isCurrentPaginationPageOnly = false) {}

        /**
         * @return T
         */
        public function assertTableColumnSummaryNotSet(string $columnName, string $summarizerId, $state, bool $isCurrentPaginationPageOnly = false) {}

        /**
         * @return T
         */
        public function assertTableColumnFormattedStateSet(string $name, $value, $record) {}

        /**
         * @return T
         */
        public function assertTableColumnFormattedStateNotSet(string $name, $value, $record) {}

        /**
         * @return T
         */
        public function assertTableColumnHasExtraAttributes(string $name, $value, $record) {}

        /**
         * @return T
         */
        public function assertTableColumnDoesNotHaveExtraAttributes(string $name, $value, $record) {}

        /**
         * @return T
         */
        public function assertTableColumnHasDescription(string $name, $description, $record, $position = 'below') {}

        /**
         * @return T
         */
        public function assertTableColumnDoesNotHaveDescription(string $name, $description, $record, $position = 'below') {}

        /**
         * @return T
         */
        public function assertTableSelectColumnHasOptions(string $name, array $options, $record) {}

        /**
         * @return T
         */
        public function assertTableSelectColumnDoesNotHaveOptions(string $name, array $options, $record) {}

        /**
         * @return T
         */
        public function sortTable(?string $name = null, ?string $direction = null) {}

        /**
         * @return T
         */
        public function searchTable(?string $search = null) {}

        /**
         * @return T
         */
        public function searchTableColumns(array $searches) {}

        /**
         * @return T
         */
        public function filterTable(string $name, $data = null) {}

        /**
         * @return T
         */
        public function resetTableFilters() {}

        /**
         * @return T
         */
        public function removeTableFilter(string $filter, ?string $field = null) {}

        /**
         * @return T
         */
        public function removeTableFilters() {}

        /**
         * @return T
         */
        public function assertCanSeeTableRecords(array | Collection $records, bool $inOrder = false) {}

        /**
         * @return T
         */
        public function assertCanNotSeeTableRecords(array | Collection $records) {}

        /**
         * @return T
         */
        public function assertCountTableRecords(int $count) {}

        /**
         * @return T
         */
        public function loadTable() {}
    }

}

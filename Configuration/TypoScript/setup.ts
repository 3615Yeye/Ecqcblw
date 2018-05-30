
plugin.tx_ecqcblw_ecqcblw {
  view {
    templateRootPaths.0 = EXT:ecqcblw/Resources/Private/Templates/
    templateRootPaths.1 = plugin.tx_ecqcblw_ecqcblw.view.templateRootPath
    partialRootPaths.0 = EXT:ecqcblw/Resources/Private/Partials/
    partialRootPaths.1 = plugin.tx_ecqcblw_ecqcblw.view.partialRootPath
    layoutRootPaths.0 = EXT:ecqcblw/Resources/Private/Layouts/
    layoutRootPaths.1 = plugin.tx_ecqcblw_ecqcblw.view.layoutRootPath
  }
  persistence {
    storagePid = plugin.tx_ecqcblw_ecqcblw.persistence.storagePid
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}

plugin.tx_ecqcblw._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-ecqcblw table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-ecqcblw table th {
        font-weight:bold;
    }

    .tx-ecqcblw table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)

lib.ecqcblw = USER
lib.ecqcblw {
    userFunc = TYPO3\CMS\Extbase\Core\Bootstrap->run
    pluginName = Pi1
    extensionName = Ecqcblw
    vendorName = Yeye
    controller = Ecqcblw
    action = weekend
}

page.42 < lib.ecqcblw

<?php

/* @SonataAdmin/Form/Type/sonata_type_model_autocomplete.html.twig */
class __TwigTemplate_df5488086ee959e5d6678a0507246f702a376fb5cfddbe2b7a8920d8f14d8ba9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_model_autocomplete_ajax_request_parameters' => array($this, 'block_sonata_type_model_autocomplete_ajax_request_parameters'),
            'sonata_type_model_autocomplete_dropdown_item_format' => array($this, 'block_sonata_type_model_autocomplete_dropdown_item_format'),
            'sonata_type_model_autocomplete_selection_format' => array($this, 'block_sonata_type_model_autocomplete_selection_format'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc0d9e67dcbe4d6d7fc6e5c4cb75844d1a519d0606af4ff2983472c3a131542b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc0d9e67dcbe4d6d7fc6e5c4cb75844d1a519d0606af4ff2983472c3a131542b->enter($__internal_fc0d9e67dcbe4d6d7fc6e5c4cb75844d1a519d0606af4ff2983472c3a131542b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Form/Type/sonata_type_model_autocomplete.html.twig"));

        $__internal_ab4b0705de8fa9da58129729b62091b56e575a42fe7dddf71789c3539af8fbde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab4b0705de8fa9da58129729b62091b56e575a42fe7dddf71789c3539af8fbde->enter($__internal_ab4b0705de8fa9da58129729b62091b56e575a42fe7dddf71789c3539af8fbde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Form/Type/sonata_type_model_autocomplete.html.twig"));

        // line 11
        ob_start();
        // line 12
        echo "
    <input type=\"text\" id=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "_autocomplete_input\" value=\"\"";
        // line 14
        if ((array_key_exists("read_only", $context) && ($context["read_only"] ?? $this->getContext($context, "read_only")))) {
            echo " readonly=\"readonly\"";
        }
        // line 15
        if (($context["disabled"] ?? $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 16
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 17
        echo "    />

    <div id=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "_hidden_inputs_wrap\">
        ";
        // line 20
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? $this->getContext($context, "value")));
            foreach ($context['_seq'] as $context["idx"] => $context["val"]) {
                if ((($context["idx"] . "") != "_labels")) {
                    // line 22
                    echo "<input type=\"hidden\" name=\"";
                    echo twig_escape_filter($this->env, ($context["full_name"] ?? $this->getContext($context, "full_name")), "html", null, true);
                    echo "[]\"";
                    if (($context["disabled"] ?? $this->getContext($context, "disabled"))) {
                        echo " disabled=\"disabled\"";
                    }
                    echo " value=\"";
                    echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                    echo "\">";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['idx'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 25
            echo "<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, ($context["full_name"] ?? $this->getContext($context, "full_name")), "html", null, true);
            echo "\"";
            if (($context["disabled"] ?? $this->getContext($context, "disabled"))) {
                echo " disabled=\"disabled\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["value"] ?? null), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["value"] ?? null), 0, array(), "array"), "")) : ("")), "html", null, true);
            echo "\">
        ";
        }
        // line 27
        echo "</div>

    <script>
        (function (\$) {
            var autocompleteInput = \$('#";
        // line 31
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "_autocomplete_input');
            autocompleteInput.select2({";
        // line 33
        $context["allowClearPlaceholder"] = ((( !($context["multiple"] ?? $this->getContext($context, "multiple")) &&  !($context["required"] ?? $this->getContext($context, "required")))) ? (" ") : (""));
        // line 34
        echo "placeholder: '";
        echo twig_escape_filter($this->env, ((($context["placeholder"] ?? $this->getContext($context, "placeholder"))) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : (($context["allowClearPlaceholder"] ?? $this->getContext($context, "allowClearPlaceholder")))), "html", null, true);
        echo "', // allowClear needs placeholder to work properly
                allowClear: ";
        // line 35
        echo ((($context["required"] ?? $this->getContext($context, "required"))) ? ("false") : ("true"));
        echo ",
                enable: ";
        // line 36
        echo ((($context["disabled"] ?? $this->getContext($context, "disabled"))) ? ("false") : ("true"));
        echo ",
                readonly: ";
        // line 37
        echo ((((array_key_exists("read_only", $context) && ($context["read_only"] ?? $this->getContext($context, "read_only"))) || ($this->getAttribute(($context["attr"] ?? null), "readonly", array(), "any", true, true) && $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "readonly", array())))) ? ("true") : ("false"));
        echo ",
                minimumInputLength: ";
        // line 38
        echo twig_escape_filter($this->env, ($context["minimum_input_length"] ?? $this->getContext($context, "minimum_input_length")), "html", null, true);
        echo ",
                multiple: ";
        // line 39
        echo ((($context["multiple"] ?? $this->getContext($context, "multiple"))) ? ("true") : ("false"));
        echo ",
                width: '";
        // line 40
        echo twig_escape_filter($this->env, ($context["width"] ?? $this->getContext($context, "width")), "html", null, true);
        echo "',
                dropdownAutoWidth: ";
        // line 41
        echo ((($context["dropdown_auto_width"] ?? $this->getContext($context, "dropdown_auto_width"))) ? ("true") : ("false"));
        echo ",
                containerCssClass: '";
        // line 42
        echo twig_escape_filter($this->env, (($context["container_css_class"] ?? $this->getContext($context, "container_css_class")) . " form-control"), "html", null, true);
        echo "',
                dropdownCssClass: '";
        // line 43
        echo twig_escape_filter($this->env, ($context["dropdown_css_class"] ?? $this->getContext($context, "dropdown_css_class")), "html", null, true);
        echo "',
                ajax: {
                    url:  '";
        // line 45
        echo twig_escape_filter($this->env, ((($context["url"] ?? $this->getContext($context, "url"))) ? (($context["url"] ?? $this->getContext($context, "url"))) : (twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["route"] ?? $this->getContext($context, "route")), "name", array()), (($this->getAttribute(($context["route"] ?? null), "parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["route"] ?? null), "parameters", array()), array())) : (array()))), "js"))), "html", null, true);
        echo "',
                    dataType: 'json',
                    quietMillis: ";
        // line 47
        echo twig_escape_filter($this->env, ($context["quiet_millis"] ?? $this->getContext($context, "quiet_millis")), "html", null, true);
        echo ",
                    cache: ";
        // line 48
        echo ((($context["cache"] ?? $this->getContext($context, "cache"))) ? ("true") : ("false"));
        echo ",
                    data: function (term, page) { // page is the one-based page number tracked by Select2
                        ";
        // line 50
        $this->displayBlock('sonata_type_model_autocomplete_ajax_request_parameters', $context, $blocks);
        // line 90
        echo "                    },
                    results: function (data, page) {
                        // notice we return the value of more so Select2 knows if more results can be loaded
                        return {results: data.items, more: data.more};
                    }
                },
                formatResult: function (item) {
                    return ";
        // line 97
        $this->displayBlock('sonata_type_model_autocomplete_dropdown_item_format', $context, $blocks);
        echo ";// format of one dropdown item
                },
                formatSelection: function (item) {
                    return ";
        // line 100
        $this->displayBlock('sonata_type_model_autocomplete_selection_format', $context, $blocks);
        echo ";// format selected item '<b>'+item.label+'</b>';
                },
                escapeMarkup: function (m) { return m; } // we do not want to escape markup since we are displaying html in results
            });

            autocompleteInput.on('change', function(e) {

                // console.log('change '+JSON.stringify({val:e.val, added:e.added, removed:e.removed}));

                // remove input
                if (undefined !== e.removed && null !== e.removed) {
                    var removedItems = e.removed;

                    ";
        // line 113
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 114
            echo "                        if(!\$.isArray(removedItems)) {
                            removedItems = [removedItems];
                        }

                        var length = removedItems.length;
                        for (var i = 0; i < length; i++) {
                            el = removedItems[i];
                            \$('#";
            // line 121
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "_hidden_inputs_wrap input:hidden[value=\"'+el.id+'\"]').remove();
                        }";
        } else {
            // line 124
            echo "\$('#";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "_hidden_inputs_wrap input:hidden').val('');";
        }
        // line 126
        echo "                }

                // add new input
                var el = null;
                if (undefined !== e.added) {

                    var addedItems = e.added;

                    ";
        // line 134
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 135
            echo "                        if(!\$.isArray(addedItems)) {
                            addedItems = [addedItems];
                        }

                        var length = addedItems.length;
                        for (var i = 0; i < length; i++) {
                            el = addedItems[i];
                            \$('#";
            // line 142
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "_hidden_inputs_wrap').append('<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, ($context["full_name"] ?? $this->getContext($context, "full_name")), "html", null, true);
            echo "[]\" value=\"'+el.id+'\" />');
                        }";
        } else {
            // line 145
            echo "\$('#";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "_hidden_inputs_wrap input:hidden').val(addedItems.id);";
        }
        // line 147
        echo "                }
            });

            // Initialise the autocomplete
            var data = [];";
        // line 153
        if ( !twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            // line 154
            echo "data =";
            if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
                echo "[";
            }
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? $this->getContext($context, "value")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["idx"] => $context["val"]) {
                if ((($context["idx"] . "") != "_labels")) {
                    // line 156
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        echo ", ";
                    }
                    // line 157
                    echo "{id: '";
                    echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["val"], "js"), "html", null, true);
                    echo "', label:'";
                    echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["value"] ?? $this->getContext($context, "value")), "_labels", array(), "array"), $context["idx"], array(), "array"), "js"), "html", null, true);
                    echo "'}";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['idx'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
                echo "]";
            }
            echo ";
            ";
        }
        // line 162
        echo "if (undefined==data.length || 0<data.length) { // Leave placeholder if no data set
                autocompleteInput.select2('data', data);
            }

            // remove unneeded autocomplete text input before form submit
            \$('#";
        // line 167
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "_autocomplete_input').closest('form').submit(function()
            {
                \$('#";
        // line 169
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "_autocomplete_input').remove();
                return true;
            });
        })(jQuery);
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_fc0d9e67dcbe4d6d7fc6e5c4cb75844d1a519d0606af4ff2983472c3a131542b->leave($__internal_fc0d9e67dcbe4d6d7fc6e5c4cb75844d1a519d0606af4ff2983472c3a131542b_prof);

        
        $__internal_ab4b0705de8fa9da58129729b62091b56e575a42fe7dddf71789c3539af8fbde->leave($__internal_ab4b0705de8fa9da58129729b62091b56e575a42fe7dddf71789c3539af8fbde_prof);

    }

    // line 50
    public function block_sonata_type_model_autocomplete_ajax_request_parameters($context, array $blocks = array())
    {
        $__internal_42afa2f00dbf213186208fd96122c5fad0b66857bb814726281dda13b9ab11f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42afa2f00dbf213186208fd96122c5fad0b66857bb814726281dda13b9ab11f7->enter($__internal_42afa2f00dbf213186208fd96122c5fad0b66857bb814726281dda13b9ab11f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_ajax_request_parameters"));

        $__internal_67a9089b76925113a2324ddab6b0d094e8cd5e160a0bfc4c403fdd8469ad4de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67a9089b76925113a2324ddab6b0d094e8cd5e160a0bfc4c403fdd8469ad4de8->enter($__internal_67a9089b76925113a2324ddab6b0d094e8cd5e160a0bfc4c403fdd8469ad4de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_ajax_request_parameters"));

        // line 51
        echo "                        return {
                                //search term
                                '";
        // line 53
        echo twig_escape_filter($this->env, ($context["req_param_name_search"] ?? $this->getContext($context, "req_param_name_search")), "html", null, true);
        echo "': term,

                                // page size
                                '";
        // line 56
        echo twig_escape_filter($this->env, ($context["req_param_name_items_per_page"] ?? $this->getContext($context, "req_param_name_items_per_page")), "html", null, true);
        echo "': ";
        echo twig_escape_filter($this->env, ($context["items_per_page"] ?? $this->getContext($context, "items_per_page")), "html", null, true);
        echo ",

                                // page number
                                '";
        // line 59
        echo twig_escape_filter($this->env, ($context["req_param_name_page_number"] ?? $this->getContext($context, "req_param_name_page_number")), "html", null, true);
        echo "': page,

                                // admin
                                ";
        // line 62
        if ( !(null === $this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "admin", array()))) {
            // line 63
            echo "                                    'uniqid': '";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "admin", array()), "uniqid", array()), "html", null, true);
            echo "',
                                    'admin_code': '";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "admin", array()), "code", array()), "html", null, true);
            echo "',
                                ";
        } elseif (        // line 65
($context["admin_code"] ?? $this->getContext($context, "admin_code"))) {
            // line 66
            echo "                                    'admin_code':  '";
            echo twig_escape_filter($this->env, ($context["admin_code"] ?? $this->getContext($context, "admin_code")), "html", null, true);
            echo "',
                                ";
        }
        // line 68
        echo "
                                 // subclass
                                ";
        // line 70
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "subclass"), "method")) {
            // line 71
            echo "                                    'subclass': '";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "subclass"), "method"), "html", null, true);
            echo "',
                                ";
        }
        // line 73
        echo "
                                ";
        // line 74
        if ((($context["context"] ?? $this->getContext($context, "context")) == "filter")) {
            // line 75
            echo "                                    'field':  '";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["full_name"] ?? $this->getContext($context, "full_name")), array("filter[" => "", "][value]" => "", "__" => ".")), "html", null, true);
            echo "',
                                    '_context': 'filter'
                                ";
        } else {
            // line 78
            echo "                                    'field':  '";
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "'
                                ";
        }
        // line 80
        echo "
                                // other parameters
                                ";
        // line 82
        if ( !twig_test_empty(($context["req_params"] ?? $this->getContext($context, "req_params")))) {
            echo ",";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["req_params"] ?? $this->getContext($context, "req_params")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 84
                echo "'";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["key"], "js"), "html", null, true);
                echo "': '";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["value"], "js"), "html", null, true);
                echo "'";
                // line 85
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 88
        echo "                        };
                        ";
        
        $__internal_67a9089b76925113a2324ddab6b0d094e8cd5e160a0bfc4c403fdd8469ad4de8->leave($__internal_67a9089b76925113a2324ddab6b0d094e8cd5e160a0bfc4c403fdd8469ad4de8_prof);

        
        $__internal_42afa2f00dbf213186208fd96122c5fad0b66857bb814726281dda13b9ab11f7->leave($__internal_42afa2f00dbf213186208fd96122c5fad0b66857bb814726281dda13b9ab11f7_prof);

    }

    // line 97
    public function block_sonata_type_model_autocomplete_dropdown_item_format($context, array $blocks = array())
    {
        $__internal_f771142110d9750866098c903bd7177110efff4364821897741ee949401c1994 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f771142110d9750866098c903bd7177110efff4364821897741ee949401c1994->enter($__internal_f771142110d9750866098c903bd7177110efff4364821897741ee949401c1994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_dropdown_item_format"));

        $__internal_7dd25ec5262a32b5b62c5cb3d47fdab396acb7d9491d2603a005ad4ce8e7f57f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dd25ec5262a32b5b62c5cb3d47fdab396acb7d9491d2603a005ad4ce8e7f57f->enter($__internal_7dd25ec5262a32b5b62c5cb3d47fdab396acb7d9491d2603a005ad4ce8e7f57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_dropdown_item_format"));

        echo "'<div class=\"";
        echo twig_escape_filter($this->env, ($context["dropdown_item_css_class"] ?? $this->getContext($context, "dropdown_item_css_class")), "html", null, true);
        echo "\">'+item.label+'<\\/div>'";
        
        $__internal_7dd25ec5262a32b5b62c5cb3d47fdab396acb7d9491d2603a005ad4ce8e7f57f->leave($__internal_7dd25ec5262a32b5b62c5cb3d47fdab396acb7d9491d2603a005ad4ce8e7f57f_prof);

        
        $__internal_f771142110d9750866098c903bd7177110efff4364821897741ee949401c1994->leave($__internal_f771142110d9750866098c903bd7177110efff4364821897741ee949401c1994_prof);

    }

    // line 100
    public function block_sonata_type_model_autocomplete_selection_format($context, array $blocks = array())
    {
        $__internal_c8f1d95e41a0254f311068ec7247022f9e7923626318b4d04794cc079b181de9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8f1d95e41a0254f311068ec7247022f9e7923626318b4d04794cc079b181de9->enter($__internal_c8f1d95e41a0254f311068ec7247022f9e7923626318b4d04794cc079b181de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_selection_format"));

        $__internal_20e32ba18b43365456b3c07b214c04bb9f0d0c112766afaabc7b3970ef46a2dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e32ba18b43365456b3c07b214c04bb9f0d0c112766afaabc7b3970ef46a2dc->enter($__internal_20e32ba18b43365456b3c07b214c04bb9f0d0c112766afaabc7b3970ef46a2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_selection_format"));

        echo "item.label";
        
        $__internal_20e32ba18b43365456b3c07b214c04bb9f0d0c112766afaabc7b3970ef46a2dc->leave($__internal_20e32ba18b43365456b3c07b214c04bb9f0d0c112766afaabc7b3970ef46a2dc_prof);

        
        $__internal_c8f1d95e41a0254f311068ec7247022f9e7923626318b4d04794cc079b181de9->leave($__internal_c8f1d95e41a0254f311068ec7247022f9e7923626318b4d04794cc079b181de9_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Form/Type/sonata_type_model_autocomplete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  484 => 100,  464 => 97,  453 => 88,  436 => 85,  430 => 84,  413 => 83,  410 => 82,  406 => 80,  400 => 78,  393 => 75,  391 => 74,  388 => 73,  382 => 71,  380 => 70,  376 => 68,  370 => 66,  368 => 65,  364 => 64,  359 => 63,  357 => 62,  351 => 59,  343 => 56,  337 => 53,  333 => 51,  324 => 50,  307 => 169,  302 => 167,  295 => 162,  288 => 159,  274 => 157,  270 => 156,  259 => 155,  254 => 154,  252 => 153,  246 => 147,  241 => 145,  234 => 142,  225 => 135,  223 => 134,  213 => 126,  208 => 124,  203 => 121,  194 => 114,  192 => 113,  176 => 100,  170 => 97,  161 => 90,  159 => 50,  154 => 48,  150 => 47,  145 => 45,  140 => 43,  136 => 42,  132 => 41,  128 => 40,  124 => 39,  120 => 38,  116 => 37,  112 => 36,  108 => 35,  103 => 34,  101 => 33,  97 => 31,  91 => 27,  79 => 25,  63 => 22,  58 => 21,  56 => 20,  52 => 19,  48 => 17,  44 => 16,  40 => 15,  36 => 14,  33 => 13,  30 => 12,  28 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% spaceless %}

    <input type=\"text\" id=\"{{ id }}_autocomplete_input\" value=\"\"
        {%- if read_only is defined and read_only %} readonly=\"readonly\"{% endif -%}
        {%- if disabled %} disabled=\"disabled\"{% endif -%}
        {%- if required %} required=\"required\"{% endif %}
    />

    <div id=\"{{ id }}_hidden_inputs_wrap\">
        {% if multiple -%}
            {%- for idx, val in value if idx~'' != '_labels' -%}
                <input type=\"hidden\" name=\"{{ full_name }}[]\" {%- if disabled %} disabled=\"disabled\"{% endif %} value=\"{{ val }}\">
            {%- endfor -%}
        {% else -%}
            <input type=\"hidden\" name=\"{{ full_name }}\" {%- if disabled %} disabled=\"disabled\"{% endif %} value=\"{{ value[0]|default('') }}\">
        {% endif -%}
    </div>

    <script>
        (function (\$) {
            var autocompleteInput = \$('#{{ id }}_autocomplete_input');
            autocompleteInput.select2({
                {%- set allowClearPlaceholder = (not multiple and not required) ? ' ' : '' -%}
                placeholder: '{{ placeholder ?: allowClearPlaceholder }}', // allowClear needs placeholder to work properly
                allowClear: {{ required ? 'false' : 'true' }},
                enable: {{ disabled ? 'false' : 'true' }},
                readonly: {{ read_only is defined and read_only or attr.readonly is defined and attr.readonly ? 'true' : 'false' }},
                minimumInputLength: {{ minimum_input_length }},
                multiple: {{ multiple ? 'true' : 'false' }},
                width: '{{ width }}',
                dropdownAutoWidth: {{ dropdown_auto_width ? 'true' : 'false' }},
                containerCssClass: '{{ container_css_class ~ ' form-control' }}',
                dropdownCssClass: '{{ dropdown_css_class }}',
                ajax: {
                    url:  '{{ url ?: path(route.name, route.parameters|default([]))|e('js') }}',
                    dataType: 'json',
                    quietMillis: {{ quiet_millis }},
                    cache: {{ cache ? 'true' : 'false' }},
                    data: function (term, page) { // page is the one-based page number tracked by Select2
                        {% block sonata_type_model_autocomplete_ajax_request_parameters %}
                        return {
                                //search term
                                '{{ req_param_name_search }}': term,

                                // page size
                                '{{ req_param_name_items_per_page }}': {{ items_per_page }},

                                // page number
                                '{{ req_param_name_page_number }}': page,

                                // admin
                                {% if sonata_admin.admin is not null %}
                                    'uniqid': '{{ sonata_admin.admin.uniqid }}',
                                    'admin_code': '{{ sonata_admin.admin.code }}',
                                {% elseif admin_code %}
                                    'admin_code':  '{{ admin_code }}',
                                {% endif %}

                                 // subclass
                                {% if app.request.query.get('subclass') %}
                                    'subclass': '{{ app.request.query.get('subclass') }}',
                                {% endif %}

                                {% if context == 'filter' %}
                                    'field':  '{{ full_name|replace({'filter[': '', '][value]': '', '__':'.'}) }}',
                                    '_context': 'filter'
                                {% else %}
                                    'field':  '{{ name }}'
                                {% endif %}

                                // other parameters
                                {% if req_params is not empty %},
                                    {%- for key, value in req_params -%}
                                        '{{- key|e('js') -}}': '{{- value|e('js') -}}'
                                        {%- if not loop.last -%}, {% endif -%}
                                    {%- endfor -%}
                                {% endif %}
                        };
                        {% endblock %}
                    },
                    results: function (data, page) {
                        // notice we return the value of more so Select2 knows if more results can be loaded
                        return {results: data.items, more: data.more};
                    }
                },
                formatResult: function (item) {
                    return {% block sonata_type_model_autocomplete_dropdown_item_format %}'<div class=\"{{ dropdown_item_css_class }}\">'+item.label+'<\\/div>'{% endblock %};// format of one dropdown item
                },
                formatSelection: function (item) {
                    return {% block sonata_type_model_autocomplete_selection_format %}item.label{% endblock %};// format selected item '<b>'+item.label+'</b>';
                },
                escapeMarkup: function (m) { return m; } // we do not want to escape markup since we are displaying html in results
            });

            autocompleteInput.on('change', function(e) {

                // console.log('change '+JSON.stringify({val:e.val, added:e.added, removed:e.removed}));

                // remove input
                if (undefined !== e.removed && null !== e.removed) {
                    var removedItems = e.removed;

                    {% if multiple %}
                        if(!\$.isArray(removedItems)) {
                            removedItems = [removedItems];
                        }

                        var length = removedItems.length;
                        for (var i = 0; i < length; i++) {
                            el = removedItems[i];
                            \$('#{{ id }}_hidden_inputs_wrap input:hidden[value=\"'+el.id+'\"]').remove();
                        }
                    {%- else -%}
                        \$('#{{ id }}_hidden_inputs_wrap input:hidden').val('');
                    {%- endif %}
                }

                // add new input
                var el = null;
                if (undefined !== e.added) {

                    var addedItems = e.added;

                    {% if multiple %}
                        if(!\$.isArray(addedItems)) {
                            addedItems = [addedItems];
                        }

                        var length = addedItems.length;
                        for (var i = 0; i < length; i++) {
                            el = addedItems[i];
                            \$('#{{ id }}_hidden_inputs_wrap').append('<input type=\"hidden\" name=\"{{ full_name }}[]\" value=\"'+el.id+'\" />');
                        }
                    {%- else -%}
                        \$('#{{ id }}_hidden_inputs_wrap input:hidden').val(addedItems.id);
                    {%- endif %}
                }
            });

            // Initialise the autocomplete
            var data = [];

            {%- if value is not empty -%}
                data = {%- if multiple -%}[ {%- endif -%}
                {%- for idx, val  in value if idx~'' != '_labels' -%}
                    {%- if not loop.first -%}, {% endif -%}
                    {id: '{{ val|e('js') }}', label:'{{ value['_labels'][idx]|e('js') }}'}
                {%- endfor -%}
                {%- if multiple -%} ] {%- endif -%};
            {% endif -%}

            if (undefined==data.length || 0<data.length) { // Leave placeholder if no data set
                autocompleteInput.select2('data', data);
            }

            // remove unneeded autocomplete text input before form submit
            \$('#{{ id }}_autocomplete_input').closest('form').submit(function()
            {
                \$('#{{ id }}_autocomplete_input').remove();
                return true;
            });
        })(jQuery);
    </script>
{% endspaceless %}
", "@SonataAdmin/Form/Type/sonata_type_model_autocomplete.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/Form/Type/sonata_type_model_autocomplete.html.twig");
    }
}

<?php

/* @SonataBlock/Profiler/block.html.twig */
class __TwigTemplate_6198f211ee9a3434d7273ab4547f0ea2d3e471f44e1e794df714992438bde076 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "@SonataBlock/Profiler/block.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'table' => array($this, 'block_table'),
            'table_v2' => array($this, 'block_table_v2'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68ba74132a17aaa39e31eac4b840589001672295e6a0c5664ad6500a39f21a80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68ba74132a17aaa39e31eac4b840589001672295e6a0c5664ad6500a39f21a80->enter($__internal_68ba74132a17aaa39e31eac4b840589001672295e6a0c5664ad6500a39f21a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Profiler/block.html.twig"));

        $__internal_1b05397c44c9d92d6fb3e0ea30e64fe22573ab353f65037d606b65b9c292d42a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b05397c44c9d92d6fb3e0ea30e64fe22573ab353f65037d606b65b9c292d42a->enter($__internal_1b05397c44c9d92d6fb3e0ea30e64fe22573ab353f65037d606b65b9c292d42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Profiler/block.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68ba74132a17aaa39e31eac4b840589001672295e6a0c5664ad6500a39f21a80->leave($__internal_68ba74132a17aaa39e31eac4b840589001672295e6a0c5664ad6500a39f21a80_prof);

        
        $__internal_1b05397c44c9d92d6fb3e0ea30e64fe22573ab353f65037d606b65b9c292d42a->leave($__internal_1b05397c44c9d92d6fb3e0ea30e64fe22573ab353f65037d606b65b9c292d42a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2bc860d746bcc6c461d3fb65b126f76b40a3dd31c19def9f41d431fc53724b97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bc860d746bcc6c461d3fb65b126f76b40a3dd31c19def9f41d431fc53724b97->enter($__internal_2bc860d746bcc6c461d3fb65b126f76b40a3dd31c19def9f41d431fc53724b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ae1331d1eab8efc3c5f8b416be23cc37d76afcc64a19f75666884f499c297a18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae1331d1eab8efc3c5f8b416be23cc37d76afcc64a19f75666884f499c297a18->enter($__internal_ae1331d1eab8efc3c5f8b416be23cc37d76afcc64a19f75666884f499c297a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter(($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 5
        echo "
    <div class=\"sf-toolbar-block\">
        ";
        // line 7
        if ((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1)) {
            // line 8
            echo "            <div class=\"sf-toolbar-icon\">
                <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => ($context["token"] ?? $this->getContext($context, "token")), "panel" => ($context["name"] ?? $this->getContext($context, "name")))), "html", null, true);
            echo "\">
                    ";
            // line 10
            echo "<span style=\"width:0px; height: 28px; vertical-align: middle;\"></span>
                    <span class=\"sf-toolbar-status\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "getTotalBlock", array(), "method"), "html", null, true);
            echo "</span> blocks
                </a>
            </div>
        ";
        } else {
            // line 15
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => ($context["token"] ?? $this->getContext($context, "token")), "panel" => ($context["name"] ?? $this->getContext($context, "name")))), "html", null, true);
            echo "\">
                <div class=\"sf-toolbar-icon\">
                    ";
            // line 17
            echo twig_include($this->env, $context, "@SonataBlock/Profiler/icon.svg");
            echo "
                    <span class=\"sf-toolbar-value\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "getTotalBlock", array(), "method"), "html", null, true);
            echo "</span>
                </div>
            </a>
        ";
        }
        // line 22
        echo "
        <div class=\"sf-toolbar-info\">
            <div class=\"sf-toolbar-info-piece\">
                <b>Real Blocks</b>
                <span>";
        // line 26
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "realBlocks", array())), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Containers</b>
                <span>";
        // line 30
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "containers", array())), "html", null, true);
        echo "</span>
            </div>
            ";
        // line 32
        if ((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1)) {
            // line 33
            echo "                ";
            // line 35
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Total Blocks</b>
                    <span>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "getTotalBlock", array(), "method"), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 40
        echo "            <div class=\"sf-toolbar-info-piece\">
                ";
        // line 41
        if ((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1)) {
            echo "<hr />";
        }
        // line 42
        echo "                <b>Events</b>
                <span>";
        // line 43
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "events", array())), "html", null, true);
        echo "</span>
            </div>
        </div>
    </div>
";
        
        $__internal_ae1331d1eab8efc3c5f8b416be23cc37d76afcc64a19f75666884f499c297a18->leave($__internal_ae1331d1eab8efc3c5f8b416be23cc37d76afcc64a19f75666884f499c297a18_prof);

        
        $__internal_2bc860d746bcc6c461d3fb65b126f76b40a3dd31c19def9f41d431fc53724b97->leave($__internal_2bc860d746bcc6c461d3fb65b126f76b40a3dd31c19def9f41d431fc53724b97_prof);

    }

    // line 49
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c3bf682fb597ee127b42fe9d3e41d1b5de854d08132d039ba3c174deb26c2bc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3bf682fb597ee127b42fe9d3e41d1b5de854d08132d039ba3c174deb26c2bc4->enter($__internal_c3bf682fb597ee127b42fe9d3e41d1b5de854d08132d039ba3c174deb26c2bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7c3a017a82ca3180752c11fe1a8c0503716239bcd0244a254ea4d89e3b040e89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c3a017a82ca3180752c11fe1a8c0503716239bcd0244a254ea4d89e3b040e89->enter($__internal_7c3a017a82ca3180752c11fe1a8c0503716239bcd0244a254ea4d89e3b040e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 50
        echo "    <span class=\"label\">
        <span class=\"icon\">
            ";
        // line 52
        echo twig_include($this->env, $context, "@SonataBlock/Profiler/icon.svg");
        echo "
        </span>
        <strong>Blocks";
        // line 54
        if ((twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "events", array())) > 0)) {
            echo "<strong>*</strong>";
        }
        echo "</strong>
        <span class=\"count\">
            <span>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "getTotalBlock", array(), "method"), "html", null, true);
        echo "</span>
        </span>
    </span>
";
        
        $__internal_7c3a017a82ca3180752c11fe1a8c0503716239bcd0244a254ea4d89e3b040e89->leave($__internal_7c3a017a82ca3180752c11fe1a8c0503716239bcd0244a254ea4d89e3b040e89_prof);

        
        $__internal_c3bf682fb597ee127b42fe9d3e41d1b5de854d08132d039ba3c174deb26c2bc4->leave($__internal_c3bf682fb597ee127b42fe9d3e41d1b5de854d08132d039ba3c174deb26c2bc4_prof);

    }

    // line 61
    public function block_panel($context, array $blocks = array())
    {
        $__internal_32b82658a975e93f0ace6fa30b19bd7e2e9f2fa610da04a4c50e6ce456ddc70e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32b82658a975e93f0ace6fa30b19bd7e2e9f2fa610da04a4c50e6ce456ddc70e->enter($__internal_32b82658a975e93f0ace6fa30b19bd7e2e9f2fa610da04a4c50e6ce456ddc70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f122b5e9dd10e43d806475d73b9a9b9979b011e4df4a73723b6c1e0c34443aec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f122b5e9dd10e43d806475d73b9a9b9979b011e4df4a73723b6c1e0c34443aec->enter($__internal_f122b5e9dd10e43d806475d73b9a9b9979b011e4df4a73723b6c1e0c34443aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 62
        echo "    ";
        // line 63
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter(($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 64
        echo "
    <h2>Events Blocks</h2>
    <table>
        <tr>
            <th>code name</th>
            <th>listener tag</th>
            <th>Block types</th>
            <th>Listeners</th>
        </tr>

        ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "events", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 75
            echo "            <tr>
                <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "template_code", array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "event_name", array(), "array"), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["event"], "blocks", array(), "array"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 80
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["type"], 1, array()), "html", null, true);
                echo " (id:";
                echo twig_escape_filter($this->env, $this->getAttribute($context["type"], 0, array()), "html", null, true);
                echo ")
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 82
                echo "                        no block returned
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "                </td>
                <td>
                    ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["event"], "listeners", array(), "array"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 87
                echo "                        ";
                echo twig_escape_filter($this->env, $context["listener"], "html", null, true);
                echo "
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 89
                echo "                        no listener registered
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "    </table>

    <h2>Real Blocks</h2>
    ";
        // line 97
        $context["blocks"] = $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "realBlocks", array());
        // line 98
        echo "    ";
        if ((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1)) {
            // line 99
            echo "        ";
            $this->displayBlock("table", $context, $blocks);
            echo "
    ";
        } else {
            // line 101
            echo "        <div class=\"tab-content\">
            ";
            // line 102
            $this->displayBlock("table_v2", $context, $blocks);
            echo "
        </div>
    ";
        }
        // line 105
        echo "
    <h2>Containers Blocks</h2>
    ";
        // line 107
        $context["blocks"] = $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "containers", array());
        // line 108
        echo "    ";
        if ((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1)) {
            // line 109
            echo "        ";
            $this->displayBlock("table", $context, $blocks);
            echo "
    ";
        } else {
            // line 111
            echo "        <div class=\"tab-content\">
            ";
            // line 112
            $this->displayBlock("table_v2", $context, $blocks);
            echo "
        </div>
    ";
        }
        // line 115
        echo "
    ";
        // line 116
        $this->displayBlock("javascript", $context, $blocks);
        echo "
";
        
        $__internal_f122b5e9dd10e43d806475d73b9a9b9979b011e4df4a73723b6c1e0c34443aec->leave($__internal_f122b5e9dd10e43d806475d73b9a9b9979b011e4df4a73723b6c1e0c34443aec_prof);

        
        $__internal_32b82658a975e93f0ace6fa30b19bd7e2e9f2fa610da04a4c50e6ce456ddc70e->leave($__internal_32b82658a975e93f0ace6fa30b19bd7e2e9f2fa610da04a4c50e6ce456ddc70e_prof);

    }

    // line 119
    public function block_table($context, array $blocks = array())
    {
        $__internal_e195e34ac05f0c235db71d79a98ec6ee7c15c7762401d4cc1728a8cb0f8da5a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e195e34ac05f0c235db71d79a98ec6ee7c15c7762401d4cc1728a8cb0f8da5a6->enter($__internal_e195e34ac05f0c235db71d79a98ec6ee7c15c7762401d4cc1728a8cb0f8da5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        $__internal_c2d326b654ea2094d15695d2cbaf802125028ac02bf38ed66aa7cc104d852460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2d326b654ea2094d15695d2cbaf802125028ac02bf38ed66aa7cc104d852460->enter($__internal_c2d326b654ea2094d15695d2cbaf802125028ac02bf38ed66aa7cc104d852460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        // line 120
        echo "    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Type</th>
            <th>Mem. (diff)</th>
            <th>Mem. (peak)</th>
            <th>Duration</th>
        </tr>
        ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blocks"] ?? $this->getContext($context, "blocks")));
        foreach ($context['_seq'] as $context["id"] => $context["block"]) {
            // line 130
            echo "
            ";
            // line 131
            $context["rowspan"] = 1;
            // line 132
            echo "            ";
            if ($this->getAttribute($this->getAttribute($context["block"], "cache", array()), "handler", array())) {
                // line 133
                echo "                ";
                $context["rowspan"] = (($context["rowspan"] ?? $this->getContext($context, "rowspan")) + 1);
                // line 134
                echo "            ";
            }
            // line 135
            echo "
            ";
            // line 136
            if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "assets", array()), "js", array())) > 0) || (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "assets", array()), "css", array())) > 0))) {
                // line 137
                echo "                ";
                $context["rowspan"] = (($context["rowspan"] ?? $this->getContext($context, "rowspan")) + 1);
                // line 138
                echo "            ";
            }
            // line 139
            echo "            <tr>
                <th style=\"vertical-align: top\" rowspan=\"";
            // line 140
            echo twig_escape_filter($this->env, ($context["rowspan"] ?? $this->getContext($context, "rowspan")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "</th>
                <td>";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "type", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 143
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($this->getAttribute($context["block"], "memory_end", array()) - $this->getAttribute($context["block"], "memory_start", array())) / 1000), 0), "html", null, true);
            echo " Kb</td>
                <td>";
            // line 144
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute($context["block"], "memory_peak", array()) / 1000), 0), "html", null, true);
            echo " Kb</td>
                <td>";
            // line 145
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["block"], "duration", array()), 2), "html", null, true);
            echo " ms</td>
            </tr>

            ";
            // line 148
            if ($this->getAttribute($this->getAttribute($context["block"], "cache", array()), "handler", array())) {
                // line 149
                echo "                <tr style=\"vertical-align: top\">
                    <td colspan=\"3\">
                        Cache Keys: <pre>";
                // line 151
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute($context["block"], "cache", array()), "keys", array())), "html", null, true);
                echo "</pre> <br />
                        Contextual Keys: <pre>";
                // line 152
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute($context["block"], "cache", array()), "contextual_keys", array())), "html", null, true);
                echo "</pre>
                    </td>
                    <td colspan=\"2\">
                        TTL: ";
                // line 155
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "cache", array()), "ttl", array()), "html", null, true);
                echo "s. <br />
                        Lifetime: ";
                // line 156
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "cache", array()), "lifetime", array()), "html", null, true);
                echo "s. <br />
                        Backend: ";
                // line 157
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "cache", array()), "handler", array()), "html", null, true);
                echo " <br />
                        Loading from cache: ";
                // line 158
                if ($this->getAttribute($this->getAttribute($context["block"], "cache", array()), "from_cache", array())) {
                    echo "YES";
                } else {
                    echo "NO";
                }
                echo " <br />
                    </td>
                </tr>
            ";
            }
            // line 162
            echo "
            ";
            // line 163
            if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "assets", array()), "js", array())) > 0) || (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "assets", array()), "css", array())) > 0))) {
                // line 164
                echo "                <tr>
                    <td colspan=\"5\">
                        Javascripts: <pre>";
                // line 166
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute($context["block"], "assets", array()), "js", array())), "html", null, true);
                echo "</pre><br />
                        Stylesheets: <pre>";
                // line 167
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute($context["block"], "assets", array()), "css", array())), "html", null, true);
                echo "</pre>
                    </td>
                </tr>
            ";
            }
            // line 171
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "    </table>
";
        
        $__internal_c2d326b654ea2094d15695d2cbaf802125028ac02bf38ed66aa7cc104d852460->leave($__internal_c2d326b654ea2094d15695d2cbaf802125028ac02bf38ed66aa7cc104d852460_prof);

        
        $__internal_e195e34ac05f0c235db71d79a98ec6ee7c15c7762401d4cc1728a8cb0f8da5a6->leave($__internal_e195e34ac05f0c235db71d79a98ec6ee7c15c7762401d4cc1728a8cb0f8da5a6_prof);

    }

    // line 176
    public function block_table_v2($context, array $blocks = array())
    {
        $__internal_02d39310d15235fc02cf265a5cde60b40e9699259a5e55d37e457a2317311a97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02d39310d15235fc02cf265a5cde60b40e9699259a5e55d37e457a2317311a97->enter($__internal_02d39310d15235fc02cf265a5cde60b40e9699259a5e55d37e457a2317311a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_v2"));

        $__internal_22f32558ff4bd9cff047dbc48f51c7f7ea772f6a99a0530c123833d342752091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22f32558ff4bd9cff047dbc48f51c7f7ea772f6a99a0530c123833d342752091->enter($__internal_22f32558ff4bd9cff047dbc48f51c7f7ea772f6a99a0530c123833d342752091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_v2"));

        // line 177
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blocks"] ?? $this->getContext($context, "blocks")));
        foreach ($context['_seq'] as $context["id"] => $context["block"]) {
            // line 178
            echo "        <table>
            <thead>
            <tr>
                <th colspan=\"2\">Block ";
            // line 181
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>Name</th>
                <td>";
            // line 187
            echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "name", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "type", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Mem. diff / Mem. peak / Duration</th>
                <td>";
            // line 195
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($this->getAttribute($context["block"], "memory_end", array()) - $this->getAttribute($context["block"], "memory_start", array())) / 1000), 0), "html", null, true);
            echo " Kb / ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute($context["block"], "memory_peak", array()) / 1000), 0), "html", null, true);
            echo " Kb / ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["block"], "duration", array()), 2), "html", null, true);
            echo " ms</td>
            </tr>

            ";
            // line 198
            if ($this->getAttribute($this->getAttribute($context["block"], "cache", array()), "handler", array())) {
                // line 199
                echo "                <tr>
                    <th>Cache backend</th>
                    <td>
                        ";
                // line 202
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "cache", array()), "handler", array()), "html", null, true);
                echo " - Loading from cache: ";
                if ($this->getAttribute($this->getAttribute($context["block"], "cache", array()), "from_cache", array())) {
                    echo "YES";
                } else {
                    echo "NO";
                }
                // line 203
                echo "                    </td>
                </tr>
                <tr>
                    <th>Cache TTL / Lifetime</th>
                    <td>
                        ";
                // line 208
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "cache", array()), "ttl", array()), "html", null, true);
                echo "s. / ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "cache", array()), "lifetime", array()), "html", null, true);
                echo "s
                    </td>
                </tr>
                <tr>
                    <th>
                        Cache Informations
                    </th>
                    <td>
                        Cache Keys: <pre>";
                // line 216
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute($context["block"], "cache", array()), "keys", array())), "html", null, true);
                echo "</pre> <br />
                        Contextual Keys: <pre>";
                // line 217
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute($context["block"], "cache", array()), "contextual_keys", array())), "html", null, true);
                echo "</pre> <br />
                    </td>
                </tr>
            ";
            }
            // line 221
            echo "
            ";
            // line 222
            if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "assets", array()), "js", array())) > 0) || (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "assets", array()), "css", array())) > 0))) {
                // line 223
                echo "                <tr>
                    <th>Assets</th>
                    <td>
                        Javascripts: <pre>";
                // line 226
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute($context["block"], "assets", array()), "js", array())), "html", null, true);
                echo "</pre><br />
                        Stylesheets: <pre>";
                // line 227
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute($context["block"], "assets", array()), "css", array())), "html", null, true);
                echo "</pre>
                    </td>
                </tr>
            ";
            }
            // line 231
            echo "            </tbody>
        </table>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_22f32558ff4bd9cff047dbc48f51c7f7ea772f6a99a0530c123833d342752091->leave($__internal_22f32558ff4bd9cff047dbc48f51c7f7ea772f6a99a0530c123833d342752091_prof);

        
        $__internal_02d39310d15235fc02cf265a5cde60b40e9699259a5e55d37e457a2317311a97->leave($__internal_02d39310d15235fc02cf265a5cde60b40e9699259a5e55d37e457a2317311a97_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Profiler/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  628 => 231,  621 => 227,  617 => 226,  612 => 223,  610 => 222,  607 => 221,  600 => 217,  596 => 216,  583 => 208,  576 => 203,  568 => 202,  563 => 199,  561 => 198,  551 => 195,  544 => 191,  537 => 187,  528 => 181,  523 => 178,  518 => 177,  509 => 176,  498 => 173,  491 => 171,  484 => 167,  480 => 166,  476 => 164,  474 => 163,  471 => 162,  460 => 158,  456 => 157,  452 => 156,  448 => 155,  442 => 152,  438 => 151,  434 => 149,  432 => 148,  426 => 145,  422 => 144,  418 => 143,  414 => 142,  410 => 141,  404 => 140,  401 => 139,  398 => 138,  395 => 137,  393 => 136,  390 => 135,  387 => 134,  384 => 133,  381 => 132,  379 => 131,  376 => 130,  372 => 129,  361 => 120,  352 => 119,  340 => 116,  337 => 115,  331 => 112,  328 => 111,  322 => 109,  319 => 108,  317 => 107,  313 => 105,  307 => 102,  304 => 101,  298 => 99,  295 => 98,  293 => 97,  288 => 94,  280 => 91,  273 => 89,  265 => 87,  260 => 86,  256 => 84,  249 => 82,  239 => 80,  234 => 79,  229 => 77,  225 => 76,  222 => 75,  218 => 74,  206 => 64,  203 => 63,  201 => 62,  192 => 61,  178 => 56,  171 => 54,  166 => 52,  162 => 50,  153 => 49,  138 => 43,  135 => 42,  131 => 41,  128 => 40,  122 => 37,  118 => 35,  116 => 33,  114 => 32,  109 => 30,  102 => 26,  96 => 22,  89 => 18,  85 => 17,  79 => 15,  72 => 11,  69 => 10,  65 => 9,  62 => 8,  60 => 7,  56 => 5,  53 => 4,  44 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}

{% block toolbar %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    <div class=\"sf-toolbar-block\">
        {% if profiler_markup_version == 1 %}
            <div class=\"sf-toolbar-icon\">
                <a href=\"{{ path('_profiler', { 'token': token, 'panel': name }) }}\">
                    {# fake image span #}<span style=\"width:0px; height: 28px; vertical-align: middle;\"></span>
                    <span class=\"sf-toolbar-status\">{{ collector.getTotalBlock() }}</span> blocks
                </a>
            </div>
        {% else %}
            <a href=\"{{ path('_profiler', { 'token': token, 'panel': name }) }}\">
                <div class=\"sf-toolbar-icon\">
                    {{ include('@SonataBlock/Profiler/icon.svg') }}
                    <span class=\"sf-toolbar-value\">{{ collector.getTotalBlock() }}</span>
                </div>
            </a>
        {% endif %}

        <div class=\"sf-toolbar-info\">
            <div class=\"sf-toolbar-info-piece\">
                <b>Real Blocks</b>
                <span>{{ collector.realBlocks|length }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Containers</b>
                <span>{{ collector.containers|length }}</span>
            </div>
            {% if profiler_markup_version == 1 %}
                {# don't show the total number of blocks in the info in the new design,
                it's already shown in the toolbar #}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Total Blocks</b>
                    <span>{{ collector.getTotalBlock() }}</span>
                </div>
            {% endif %}
            <div class=\"sf-toolbar-info-piece\">
                {% if profiler_markup_version == 1 %}<hr />{% endif %}
                <b>Events</b>
                <span>{{ collector.events|length }}</span>
            </div>
        </div>
    </div>
{% endblock %}

{% block menu %}
    <span class=\"label\">
        <span class=\"icon\">
            {{ include('@SonataBlock/Profiler/icon.svg') }}
        </span>
        <strong>Blocks{% if collector.events|length > 0 %}<strong>*</strong>{% endif %}</strong>
        <span class=\"count\">
            <span>{{ collector.getTotalBlock() }}</span>
        </span>
    </span>
{% endblock %}

{% block panel %}
    {# NEXT_MAJOR : remove this when Symfony Requirement will be bumped to 2.8+ #}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    <h2>Events Blocks</h2>
    <table>
        <tr>
            <th>code name</th>
            <th>listener tag</th>
            <th>Block types</th>
            <th>Listeners</th>
        </tr>

        {% for event in collector.events %}
            <tr>
                <td>{{ event['template_code'] }}</td>
                <td>{{ event['event_name'] }}</td>
                <td>
                    {% for type in event['blocks'] %}
                        {{ type.1 }} (id:{{ type.0 }})
                    {% else %}
                        no block returned
                    {% endfor %}
                </td>
                <td>
                    {% for listener in event['listeners'] %}
                        {{ listener }}
                    {% else %}
                        no listener registered
                    {% endfor %}
                </td>
            </tr>
        {% endfor %}
    </table>

    <h2>Real Blocks</h2>
    {% set blocks = collector.realBlocks %}
    {% if profiler_markup_version == 1 %}
        {{ block('table') }}
    {% else %}
        <div class=\"tab-content\">
            {{ block('table_v2') }}
        </div>
    {% endif %}

    <h2>Containers Blocks</h2>
    {% set blocks = collector.containers %}
    {% if profiler_markup_version == 1 %}
        {{ block('table') }}
    {% else %}
        <div class=\"tab-content\">
            {{ block('table_v2') }}
        </div>
    {% endif %}

    {{ block('javascript') }}
{% endblock %}

{% block table %}
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Type</th>
            <th>Mem. (diff)</th>
            <th>Mem. (peak)</th>
            <th>Duration</th>
        </tr>
        {% for id, block in blocks %}

            {% set rowspan = 1 %}
            {% if block.cache.handler %}
                {% set rowspan = rowspan + 1 %}
            {% endif %}

            {% if block.assets.js|length > 0 or block.assets.css|length > 0 %}
                {% set rowspan = rowspan + 1 %}
            {% endif %}
            <tr>
                <th style=\"vertical-align: top\" rowspan=\"{{ rowspan }}\">{{ id }}</th>
                <td>{{ block.name }}</td>
                <td>{{ block.type }}</td>
                <td>{{ ((block.memory_end-block.memory_start)/1000)|number_format(0) }} Kb</td>
                <td>{{ (block.memory_peak/1000)|number_format(0) }} Kb</td>
                <td>{{ block.duration|number_format(2) }} ms</td>
            </tr>

            {% if block.cache.handler %}
                <tr style=\"vertical-align: top\">
                    <td colspan=\"3\">
                        Cache Keys: <pre>{{ block.cache.keys|json_encode() }}</pre> <br />
                        Contextual Keys: <pre>{{ block.cache.contextual_keys|json_encode() }}</pre>
                    </td>
                    <td colspan=\"2\">
                        TTL: {{ block.cache.ttl }}s. <br />
                        Lifetime: {{ block.cache.lifetime }}s. <br />
                        Backend: {{ block.cache.handler }} <br />
                        Loading from cache: {% if block.cache.from_cache %}YES{% else %}NO{% endif %} <br />
                    </td>
                </tr>
            {% endif %}

            {% if block.assets.js|length > 0 or block.assets.css|length > 0  %}
                <tr>
                    <td colspan=\"5\">
                        Javascripts: <pre>{{ block.assets.js|json_encode() }}</pre><br />
                        Stylesheets: <pre>{{ block.assets.css|json_encode() }}</pre>
                    </td>
                </tr>
            {% endif %}

        {% endfor %}
    </table>
{% endblock %}

{% block table_v2 %}
    {% for id, block in blocks %}
        <table>
            <thead>
            <tr>
                <th colspan=\"2\">Block {{ id }}</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>Name</th>
                <td>{{ block.name }}</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>{{ block.type }}</td>
            </tr>
            <tr>
                <th>Mem. diff / Mem. peak / Duration</th>
                <td>{{ ((block.memory_end-block.memory_start)/1000)|number_format(0) }} Kb / {{ (block.memory_peak/1000)|number_format(0) }} Kb / {{ block.duration|number_format(2) }} ms</td>
            </tr>

            {% if block.cache.handler %}
                <tr>
                    <th>Cache backend</th>
                    <td>
                        {{ block.cache.handler }} - Loading from cache: {% if block.cache.from_cache %}YES{% else %}NO{% endif %}
                    </td>
                </tr>
                <tr>
                    <th>Cache TTL / Lifetime</th>
                    <td>
                        {{ block.cache.ttl }}s. / {{ block.cache.lifetime }}s
                    </td>
                </tr>
                <tr>
                    <th>
                        Cache Informations
                    </th>
                    <td>
                        Cache Keys: <pre>{{ block.cache.keys|json_encode() }}</pre> <br />
                        Contextual Keys: <pre>{{ block.cache.contextual_keys|json_encode() }}</pre> <br />
                    </td>
                </tr>
            {% endif %}

            {% if block.assets.js|length > 0 or block.assets.css|length > 0  %}
                <tr>
                    <th>Assets</th>
                    <td>
                        Javascripts: <pre>{{ block.assets.js|json_encode() }}</pre><br />
                        Stylesheets: <pre>{{ block.assets.css|json_encode() }}</pre>
                    </td>
                </tr>
            {% endif %}
            </tbody>
        </table>
    {% endfor %}
{% endblock %}
", "@SonataBlock/Profiler/block.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/block-bundle/Resources/views/Profiler/block.html.twig");
    }
}

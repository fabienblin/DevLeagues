<?php

/* @SonataAdmin/Block/block_search_result.html.twig */
class __TwigTemplate_b7dd916d7f933cf1e97b46d7f21d92ee96f320a7f995f2602003c9ca85fad329 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataAdmin/Block/block_search_result.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8148c0194889b37627d2daea8a16e1a12216823562c231732d4f7c45da2046a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8148c0194889b37627d2daea8a16e1a12216823562c231732d4f7c45da2046a->enter($__internal_f8148c0194889b37627d2daea8a16e1a12216823562c231732d4f7c45da2046a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Block/block_search_result.html.twig"));

        $__internal_d1a313f55d148ee4486a43de3d8d8e5245e5675a66d0c9c06e464185a0c3838e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1a313f55d148ee4486a43de3d8d8e5245e5675a66d0c9c06e464185a0c3838e->enter($__internal_d1a313f55d148ee4486a43de3d8d8e5245e5675a66d0c9c06e464185a0c3838e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Block/block_search_result.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8148c0194889b37627d2daea8a16e1a12216823562c231732d4f7c45da2046a->leave($__internal_f8148c0194889b37627d2daea8a16e1a12216823562c231732d4f7c45da2046a_prof);

        
        $__internal_d1a313f55d148ee4486a43de3d8d8e5245e5675a66d0c9c06e464185a0c3838e->leave($__internal_d1a313f55d148ee4486a43de3d8d8e5245e5675a66d0c9c06e464185a0c3838e_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_8b445cd635595b8fd0af41979cdb4851bd0e5e8bcb4addb607657059bbf535a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b445cd635595b8fd0af41979cdb4851bd0e5e8bcb4addb607657059bbf535a7->enter($__internal_8b445cd635595b8fd0af41979cdb4851bd0e5e8bcb4addb607657059bbf535a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_ccdb635d92826ad4b628b3e0edd5e34b5e8be10560a5835787514644a8943458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccdb635d92826ad4b628b3e0edd5e34b5e8be10560a5835787514644a8943458->enter($__internal_ccdb635d92826ad4b628b3e0edd5e34b5e8be10560a5835787514644a8943458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"col-lg-4 col-md-6\">
        <div class=\"box\">
            <div class=\"box-header with-border\">
                ";
        // line 18
        $context["icon"] = (($this->getAttribute(($context["settings"] ?? null), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "icon", array()), "")) : (""));
        // line 19
        echo "                ";
        echo ($context["icon"] ?? $this->getContext($context, "icon"));
        echo "
                <h3 class=\"box-title\">
                    ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "label", array()), array(), $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationdomain", array())), "html", null, true);
        echo "
                </h3>

                <div class=\"box-tools pull-right\">
                    ";
        // line 25
        if ((($context["pager"] ?? $this->getContext($context, "pager")) && ($this->getAttribute(($context["pager"] ?? $this->getContext($context, "pager")), "getNbResults", array(), "method") > 0))) {
            // line 26
            echo "                        <span class=\"badge\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["pager"] ?? $this->getContext($context, "pager")), "getNbResults", array(), "method"), "html", null, true);
            echo "</span>
                    ";
        } elseif (($this->getAttribute(        // line 27
($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method"))) {
            // line 28
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
            echo "\" class=\"btn btn-box-tool\">
                            <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 32
        echo "                    ";
        if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
            // line 33
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" class=\"btn btn-box-tool\">
                            <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 37
        echo "                </div>
            </div>
            ";
        // line 39
        if ((($context["pager"] ?? $this->getContext($context, "pager")) && twig_length_filter($this->env, $this->getAttribute(($context["pager"] ?? $this->getContext($context, "pager")), "getResults", array(), "method")))) {
            // line 40
            echo "                <div class=\"box-body no-padding\">
                    <ul class=\"nav nav-stacked sonata-search-result-list\">
                        ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pager"] ?? $this->getContext($context, "pager")), "getResults", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 43
                echo "                            ";
                $context["link"] = $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getSearchResultLink", array(0 => $context["result"]), "method");
                // line 44
                echo "                            ";
                if (($context["link"] ?? $this->getContext($context, "link"))) {
                    // line 45
                    echo "                                <li><a href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? $this->getContext($context, "link")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "toString", array(0 => $context["result"]), "method"), "html", null, true);
                    echo "</a></li>
                            ";
                } else {
                    // line 47
                    echo "                                <li><a>";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "toString", array(0 => $context["result"]), "method"), "html", null, true);
                    echo "</a></li>
                            ";
                }
                // line 49
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                    </ul>
                </div>
            ";
        } else {
            // line 53
            echo "                <div class=\"box-body\">
                    <p>
                        <em>";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
            echo "</em>
                    </p>
                </div>
            ";
        }
        // line 59
        echo "        </div>
    </div>
";
        
        $__internal_ccdb635d92826ad4b628b3e0edd5e34b5e8be10560a5835787514644a8943458->leave($__internal_ccdb635d92826ad4b628b3e0edd5e34b5e8be10560a5835787514644a8943458_prof);

        
        $__internal_8b445cd635595b8fd0af41979cdb4851bd0e5e8bcb4addb607657059bbf535a7->leave($__internal_8b445cd635595b8fd0af41979cdb4851bd0e5e8bcb4addb607657059bbf535a7_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Block/block_search_result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 59,  145 => 55,  141 => 53,  136 => 50,  130 => 49,  124 => 47,  116 => 45,  113 => 44,  110 => 43,  106 => 42,  102 => 40,  100 => 39,  96 => 37,  88 => 33,  85 => 32,  77 => 28,  75 => 27,  70 => 26,  68 => 25,  61 => 21,  55 => 19,  53 => 18,  48 => 15,  39 => 14,  18 => 12,);
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

{% extends sonata_block.templates.block_base %}

{% block block %}
    <div class=\"col-lg-4 col-md-6\">
        <div class=\"box\">
            <div class=\"box-header with-border\">
                {% set icon = settings.icon|default('') %}
                {{ icon|raw }}
                <h3 class=\"box-title\">
                    {{ admin.label|trans({}, admin.translationdomain) }}
                </h3>

                <div class=\"box-tools pull-right\">
                    {% if pager and pager.getNbResults() > 0 %}
                        <span class=\"badge\">{{ pager.getNbResults() }}</span>
                    {% elseif admin.hasRoute('create') and admin.isGranted('CREATE') %}
                        <a href=\"{{ admin.generateUrl('create') }}\" class=\"btn btn-box-tool\">
                            <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
                        </a>
                    {% endif %}
                    {% if admin.hasRoute('list') and admin.isGranted('LIST') %}
                        <a href=\"{{ admin.generateUrl('list') }}\" class=\"btn btn-box-tool\">
                            <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
                        </a>
                    {% endif %}
                </div>
            </div>
            {% if pager and pager.getResults()|length %}
                <div class=\"box-body no-padding\">
                    <ul class=\"nav nav-stacked sonata-search-result-list\">
                        {% for result in pager.getResults() %}
                            {% set link = admin.getSearchResultLink(result) %}
                            {% if link %}
                                <li><a href=\"{{ link }}\">{{ admin.toString(result) }}</a></li>
                            {% else %}
                                <li><a>{{ admin.toString(result) }}</a></li>
                            {% endif %}
                        {% endfor %}
                    </ul>
                </div>
            {% else %}
                <div class=\"box-body\">
                    <p>
                        <em>{{ 'no_results_found'|trans({}, 'SonataAdminBundle') }}</em>
                    </p>
                </div>
            {% endif %}
        </div>
    </div>
{% endblock %}
", "@SonataAdmin/Block/block_search_result.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/Block/block_search_result.html.twig");
    }
}

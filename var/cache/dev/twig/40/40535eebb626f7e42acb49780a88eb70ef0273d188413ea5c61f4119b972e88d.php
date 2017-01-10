<?php

/* @AvanzuAdminTheme/Exception/exception_full.html.twig */
class __TwigTemplate_1f68f75bcd29a65aa503914f63b38b331d091c116a8271da3b50459a3aa2542b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "@AvanzuAdminTheme/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a16e25a1a5b05e8f2f44eda5352d831f893ff34163e35394d36a734a24c22c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a16e25a1a5b05e8f2f44eda5352d831f893ff34163e35394d36a734a24c22c4->enter($__internal_2a16e25a1a5b05e8f2f44eda5352d831f893ff34163e35394d36a734a24c22c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Exception/exception_full.html.twig"));

        $__internal_c8cbb8260f993acda2d8bb2184a4ec3c11104c58a9212fb657eddaa7f1f0b720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8cbb8260f993acda2d8bb2184a4ec3c11104c58a9212fb657eddaa7f1f0b720->enter($__internal_c8cbb8260f993acda2d8bb2184a4ec3c11104c58a9212fb657eddaa7f1f0b720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a16e25a1a5b05e8f2f44eda5352d831f893ff34163e35394d36a734a24c22c4->leave($__internal_2a16e25a1a5b05e8f2f44eda5352d831f893ff34163e35394d36a734a24c22c4_prof);

        
        $__internal_c8cbb8260f993acda2d8bb2184a4ec3c11104c58a9212fb657eddaa7f1f0b720->leave($__internal_c8cbb8260f993acda2d8bb2184a4ec3c11104c58a9212fb657eddaa7f1f0b720_prof);

    }

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_69998dab9115ea38a4c64d2b78b09a2332b9f8e997f62f3ba75363b7e44f6754 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69998dab9115ea38a4c64d2b78b09a2332b9f8e997f62f3ba75363b7e44f6754->enter($__internal_69998dab9115ea38a4c64d2b78b09a2332b9f8e997f62f3ba75363b7e44f6754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_e9ac5733ea6fa4601e1f6c070e14568c7314146efbd29c23341ca2103644eb8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9ac5733ea6fa4601e1f6c070e14568c7314146efbd29c23341ca2103644eb8c->enter($__internal_e9ac5733ea6fa4601e1f6c070e14568c7314146efbd29c23341ca2103644eb8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Error ";
        
        $__internal_e9ac5733ea6fa4601e1f6c070e14568c7314146efbd29c23341ca2103644eb8c->leave($__internal_e9ac5733ea6fa4601e1f6c070e14568c7314146efbd29c23341ca2103644eb8c_prof);

        
        $__internal_69998dab9115ea38a4c64d2b78b09a2332b9f8e997f62f3ba75363b7e44f6754->leave($__internal_69998dab9115ea38a4c64d2b78b09a2332b9f8e997f62f3ba75363b7e44f6754_prof);

    }

    // line 3
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_4f9b61d217b474458d3120cdc7d16d1415d38979295a31fafc6f77790ebfd7d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f9b61d217b474458d3120cdc7d16d1415d38979295a31fafc6f77790ebfd7d6->enter($__internal_4f9b61d217b474458d3120cdc7d16d1415d38979295a31fafc6f77790ebfd7d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        $__internal_b81d18ab6dd7d5ae8341032e0b65f0b033d98203312ea68074692aee7b5a26d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b81d18ab6dd7d5ae8341032e0b65f0b033d98203312ea68074692aee7b5a26d4->enter($__internal_b81d18ab6dd7d5ae8341032e0b65f0b033d98203312ea68074692aee7b5a26d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " ";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        
        $__internal_b81d18ab6dd7d5ae8341032e0b65f0b033d98203312ea68074692aee7b5a26d4->leave($__internal_b81d18ab6dd7d5ae8341032e0b65f0b033d98203312ea68074692aee7b5a26d4_prof);

        
        $__internal_4f9b61d217b474458d3120cdc7d16d1415d38979295a31fafc6f77790ebfd7d6->leave($__internal_4f9b61d217b474458d3120cdc7d16d1415d38979295a31fafc6f77790ebfd7d6_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_709d23ccab070e3773c2ecfd78369e0ef93b0978e1a52e9de61fa38e90abf37f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_709d23ccab070e3773c2ecfd78369e0ef93b0978e1a52e9de61fa38e90abf37f->enter($__internal_709d23ccab070e3773c2ecfd78369e0ef93b0978e1a52e9de61fa38e90abf37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_357ad0d44b06be45d45c7f6998f6a194ab5e3ae0fad98f055763f8cb1d265d39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_357ad0d44b06be45d45c7f6998f6a194ab5e3ae0fad98f055763f8cb1d265d39->enter($__internal_357ad0d44b06be45d45c7f6998f6a194ab5e3ae0fad98f055763f8cb1d265d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 6
        echo "    <div class=\"error-page\">
        <h2 class=\"headline\">";
        // line 7
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "</h2>

        <div class=\"error-content\">
            <h3>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Something seems to have gone wrong"), "html", null, true);
        echo "</h3>

            <p>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "</p>
        </div>
    </div>

    <div class=\"\">

    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()));
        foreach ($context['_seq'] as $context["n"] => $context["position"]) {
            // line 19
            echo "
        <div class=\"box box-danger\">
            <div class=\"box-header\">
                <i class=\"fa fa-warning\"></i>

                <h3 class=\"box-title\">";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass($this->getAttribute($context["position"], "class", array()));
            echo "</h3>
            </div>
            <div class=\"box-body\">

                <div class=\"callout callout-danger\">
                    ";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFileFromText(nl2br(twig_escape_filter($this->env, $this->getAttribute($context["position"], "message", array()), "html", null, true)));
            echo "
                </div>

                <div class=\"box-group\" id=\"box-";
            // line 32
            echo twig_escape_filter($this->env, $context["n"], "html", null, true);
            echo "\">


                    <!-- trace -->
                    <div class=\"panel box box-warning\">
                        <div class=\"box-header\">
                            <h4 class=\"box-title\">
                                <a data-toggle=\"collapse\" data-parent=\"box-";
            // line 39
            echo twig_escape_filter($this->env, $context["n"], "html", null, true);
            echo "\"
                                   href=\"#trace-";
            // line 40
            echo twig_escape_filter($this->env, $context["n"], "html", null, true);
            echo "\">
                                    ";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Stack Trace"), "html", null, true);
            echo "
                                </a>
                            </h4>
                        </div>
                        <div id=\"trace-";
            // line 45
            echo twig_escape_filter($this->env, $context["n"], "html", null, true);
            echo "\" class=\"panel-collapse collapse\">
                            <div class=\"box-body\">
                                <div class=\"panel\">
                                <ul class=\"timeline\">
                                    ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["position"], "trace", array()));
            foreach ($context['_seq'] as $context["i"] => $context["trace"]) {
                // line 50
                echo "                                        <li class=\"time-label\">
                                                    <span class=\"bg-red\">
                                                        Stack #";
                // line 52
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "
                                                    </span>
                                        </li>
                                        <li>
                                            <i class=\"fa fa-code bg-blue\"></i>

                                            <div class=\"timeline-item\">
                                                <h3 class=\"timeline-header\">
                                                    ";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "file", array()), "html", null, true);
                echo "
                                                </h3>

                                                <div class=\"timeline-body\">
                                                    ";
                // line 64
                if ($this->getAttribute($context["trace"], "function", array())) {
                    // line 65
                    echo "                                                        at
                                                        <strong>
                                                            <abbr title=\"";
                    // line 67
                    echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "class", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "short_class", array()), "html", null, true);
                    echo "</abbr>
                                                            ";
                    // line 68
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["trace"], "type", array()) . $this->getAttribute($context["trace"], "function", array())), "html", null, true);
                    echo "
                                                        </strong>
                                                        (";
                    // line 70
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatArgs($this->getAttribute($context["trace"], "args", array()));
                    echo ")
                                                    ";
                }
                // line 72
                echo "
                                                    ";
                // line 73
                if (((($this->getAttribute($context["trace"], "file", array(), "any", true, true) && $this->getAttribute($context["trace"], "file", array())) && $this->getAttribute($context["trace"], "line", array(), "any", true, true)) && $this->getAttribute($context["trace"], "line", array()))) {
                    // line 74
                    echo "                                                        ";
                    echo (($this->getAttribute($context["trace"], "function", array())) ? ("<br />") : (""));
                    echo "
                                                        in ";
                    // line 75
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFile($this->getAttribute($context["trace"], "file", array()), $this->getAttribute($context["trace"], "line", array()));
                    echo "&nbsp;
                                                        ";
                    // line 76
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt($this->getAttribute($context["trace"], "file", array()), $this->getAttribute($context["trace"], "line", array()));
                    echo "

                                                    ";
                }
                // line 79
                echo "                                                </div>
                                            </div>
                                        </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                                </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['n'], $context['position'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "
";
        
        $__internal_357ad0d44b06be45d45c7f6998f6a194ab5e3ae0fad98f055763f8cb1d265d39->leave($__internal_357ad0d44b06be45d45c7f6998f6a194ab5e3ae0fad98f055763f8cb1d265d39_prof);

        
        $__internal_709d23ccab070e3773c2ecfd78369e0ef93b0978e1a52e9de61fa38e90abf37f->leave($__internal_709d23ccab070e3773c2ecfd78369e0ef93b0978e1a52e9de61fa38e90abf37f_prof);

    }

    public function getTemplateName()
    {
        return "@AvanzuAdminTheme/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 93,  246 => 83,  237 => 79,  231 => 76,  227 => 75,  222 => 74,  220 => 73,  217 => 72,  212 => 70,  207 => 68,  201 => 67,  197 => 65,  195 => 64,  188 => 60,  177 => 52,  173 => 50,  169 => 49,  162 => 45,  155 => 41,  151 => 40,  147 => 39,  137 => 32,  131 => 29,  123 => 24,  116 => 19,  112 => 18,  103 => 12,  98 => 10,  92 => 7,  89 => 6,  80 => 5,  60 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AvanzuAdminThemeBundle:layout:base-layout.html.twig' %}
{% block page_title %} Error {% endblock %}
{% block page_subtitle %} {{ status_code }} {% endblock %}

{% block page_content %}
    <div class=\"error-page\">
        <h2 class=\"headline\">{{ status_code }}</h2>

        <div class=\"error-content\">
            <h3>{{ 'Something seems to have gone wrong'|trans() }}</h3>

            <p>{{ exception.message }}</p>
        </div>
    </div>

    <div class=\"\">

    {% for n, position in exception.toarray %}

        <div class=\"box box-danger\">
            <div class=\"box-header\">
                <i class=\"fa fa-warning\"></i>

                <h3 class=\"box-title\">{{ position.class|abbr_class }}</h3>
            </div>
            <div class=\"box-body\">

                <div class=\"callout callout-danger\">
                    {{ position.message|nl2br|format_file_from_text }}
                </div>

                <div class=\"box-group\" id=\"box-{{ n }}\">


                    <!-- trace -->
                    <div class=\"panel box box-warning\">
                        <div class=\"box-header\">
                            <h4 class=\"box-title\">
                                <a data-toggle=\"collapse\" data-parent=\"box-{{ n }}\"
                                   href=\"#trace-{{ n }}\">
                                    {{ 'Stack Trace'|trans() }}
                                </a>
                            </h4>
                        </div>
                        <div id=\"trace-{{ n }}\" class=\"panel-collapse collapse\">
                            <div class=\"box-body\">
                                <div class=\"panel\">
                                <ul class=\"timeline\">
                                    {% for i, trace in position.trace %}
                                        <li class=\"time-label\">
                                                    <span class=\"bg-red\">
                                                        Stack #{{ i }}
                                                    </span>
                                        </li>
                                        <li>
                                            <i class=\"fa fa-code bg-blue\"></i>

                                            <div class=\"timeline-item\">
                                                <h3 class=\"timeline-header\">
                                                    {{ trace.file }}
                                                </h3>

                                                <div class=\"timeline-body\">
                                                    {% if trace.function %}
                                                        at
                                                        <strong>
                                                            <abbr title=\"{{ trace.class }}\">{{ trace.short_class }}</abbr>
                                                            {{ trace.type ~ trace.function }}
                                                        </strong>
                                                        ({{ trace.args|format_args }})
                                                    {% endif %}

                                                    {% if trace.file is defined and trace.file and trace.line is defined and trace.line %}
                                                        {{ trace.function ? '<br />' : '' }}
                                                        in {{ trace.file|format_file(trace.line) }}&nbsp;
                                                        {{ trace.file|file_excerpt(trace.line) }}

                                                    {% endif %}
                                                </div>
                                            </div>
                                        </li>
                                    {% endfor %}
                                </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    {% endfor %}

{% endblock %}", "@AvanzuAdminTheme/Exception/exception_full.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/AvanzuAdminThemeBundle/views/Exception/exception_full.html.twig");
    }
}

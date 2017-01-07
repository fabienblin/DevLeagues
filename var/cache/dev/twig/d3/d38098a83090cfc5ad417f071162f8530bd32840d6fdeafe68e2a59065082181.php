<?php

/* @AvanzuAdminTheme/Exception/exception_full.html.twig */
class __TwigTemplate_d1b80a476eeb34c7be439ffc9e137d58cfc115df4a3756c4bed9bad5189e5a9d extends Twig_Template
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
        $__internal_b87123ec25bf7f327e9a8b5d2fb19d4ce31603086a59cadace5c141463ec40a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b87123ec25bf7f327e9a8b5d2fb19d4ce31603086a59cadace5c141463ec40a9->enter($__internal_b87123ec25bf7f327e9a8b5d2fb19d4ce31603086a59cadace5c141463ec40a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Exception/exception_full.html.twig"));

        $__internal_e7b74ac6ebcbbe54178fb54a65976560ab125860eea7ad5a71b6cf56a7684a4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7b74ac6ebcbbe54178fb54a65976560ab125860eea7ad5a71b6cf56a7684a4e->enter($__internal_e7b74ac6ebcbbe54178fb54a65976560ab125860eea7ad5a71b6cf56a7684a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b87123ec25bf7f327e9a8b5d2fb19d4ce31603086a59cadace5c141463ec40a9->leave($__internal_b87123ec25bf7f327e9a8b5d2fb19d4ce31603086a59cadace5c141463ec40a9_prof);

        
        $__internal_e7b74ac6ebcbbe54178fb54a65976560ab125860eea7ad5a71b6cf56a7684a4e->leave($__internal_e7b74ac6ebcbbe54178fb54a65976560ab125860eea7ad5a71b6cf56a7684a4e_prof);

    }

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_82ed24c262ba8c902d5e5dbd37676038b019f5114f0cfebe431e1a10064c4251 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82ed24c262ba8c902d5e5dbd37676038b019f5114f0cfebe431e1a10064c4251->enter($__internal_82ed24c262ba8c902d5e5dbd37676038b019f5114f0cfebe431e1a10064c4251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_6123b8baf86c418a797540046c91ad5bf7759b36e1b63f52023f9b2e8c0cd30c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6123b8baf86c418a797540046c91ad5bf7759b36e1b63f52023f9b2e8c0cd30c->enter($__internal_6123b8baf86c418a797540046c91ad5bf7759b36e1b63f52023f9b2e8c0cd30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Error ";
        
        $__internal_6123b8baf86c418a797540046c91ad5bf7759b36e1b63f52023f9b2e8c0cd30c->leave($__internal_6123b8baf86c418a797540046c91ad5bf7759b36e1b63f52023f9b2e8c0cd30c_prof);

        
        $__internal_82ed24c262ba8c902d5e5dbd37676038b019f5114f0cfebe431e1a10064c4251->leave($__internal_82ed24c262ba8c902d5e5dbd37676038b019f5114f0cfebe431e1a10064c4251_prof);

    }

    // line 3
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_5760f90098ea8af82544a54b6df2007ce93bda821002f6492fde738783f3c791 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5760f90098ea8af82544a54b6df2007ce93bda821002f6492fde738783f3c791->enter($__internal_5760f90098ea8af82544a54b6df2007ce93bda821002f6492fde738783f3c791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        $__internal_81847fee0975b8ca182bddbcfd7b7fccdc347fbcb344fdb5a427a2b04d349e96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81847fee0975b8ca182bddbcfd7b7fccdc347fbcb344fdb5a427a2b04d349e96->enter($__internal_81847fee0975b8ca182bddbcfd7b7fccdc347fbcb344fdb5a427a2b04d349e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        
        $__internal_81847fee0975b8ca182bddbcfd7b7fccdc347fbcb344fdb5a427a2b04d349e96->leave($__internal_81847fee0975b8ca182bddbcfd7b7fccdc347fbcb344fdb5a427a2b04d349e96_prof);

        
        $__internal_5760f90098ea8af82544a54b6df2007ce93bda821002f6492fde738783f3c791->leave($__internal_5760f90098ea8af82544a54b6df2007ce93bda821002f6492fde738783f3c791_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_7de42039b44d75783ec8b504e3e60933db00f28d138649ffe48c01e8511e6704 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7de42039b44d75783ec8b504e3e60933db00f28d138649ffe48c01e8511e6704->enter($__internal_7de42039b44d75783ec8b504e3e60933db00f28d138649ffe48c01e8511e6704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_1899bb8c6a536e926ad592e4e003d648c0aaf4cf53e59e117477467c55286372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1899bb8c6a536e926ad592e4e003d648c0aaf4cf53e59e117477467c55286372->enter($__internal_1899bb8c6a536e926ad592e4e003d648c0aaf4cf53e59e117477467c55286372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 6
        echo "    <div class=\"error-page\">
        <h2 class=\"headline\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "</h2>

        <div class=\"error-content\">
            <h3>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Something seems to have gone wrong"), "html", null, true);
        echo "</h3>

            <p>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "</p>
        </div>
    </div>

    <div class=\"\">

    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()));
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
        
        $__internal_1899bb8c6a536e926ad592e4e003d648c0aaf4cf53e59e117477467c55286372->leave($__internal_1899bb8c6a536e926ad592e4e003d648c0aaf4cf53e59e117477467c55286372_prof);

        
        $__internal_7de42039b44d75783ec8b504e3e60933db00f28d138649ffe48c01e8511e6704->leave($__internal_7de42039b44d75783ec8b504e3e60933db00f28d138649ffe48c01e8511e6704_prof);

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

{% endblock %}", "@AvanzuAdminTheme/Exception/exception_full.html.twig", "/var/www/html/devleagues/github/app/Resources/AvanzuAdminThemeBundle/views/Exception/exception_full.html.twig");
    }
}

<?php

/* @AvanzuAdminTheme/Exception/exception_full.html.twig */
class __TwigTemplate_c18f0d5f867057c0822189a75d6a2ebe2a65e625d54d8bc8566a677db9ed5c16 extends Twig_Template
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
        $__internal_2a58ea47eb1480f01bb49f9dbbd91261a04929fd71c939a3d1186f7f726f94f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a58ea47eb1480f01bb49f9dbbd91261a04929fd71c939a3d1186f7f726f94f3->enter($__internal_2a58ea47eb1480f01bb49f9dbbd91261a04929fd71c939a3d1186f7f726f94f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Exception/exception_full.html.twig"));

        $__internal_dc3dcd2792fc90ff24a3af3137090d0d84c50008d2c1c76ab2aeadb16e79b39a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc3dcd2792fc90ff24a3af3137090d0d84c50008d2c1c76ab2aeadb16e79b39a->enter($__internal_dc3dcd2792fc90ff24a3af3137090d0d84c50008d2c1c76ab2aeadb16e79b39a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a58ea47eb1480f01bb49f9dbbd91261a04929fd71c939a3d1186f7f726f94f3->leave($__internal_2a58ea47eb1480f01bb49f9dbbd91261a04929fd71c939a3d1186f7f726f94f3_prof);

        
        $__internal_dc3dcd2792fc90ff24a3af3137090d0d84c50008d2c1c76ab2aeadb16e79b39a->leave($__internal_dc3dcd2792fc90ff24a3af3137090d0d84c50008d2c1c76ab2aeadb16e79b39a_prof);

    }

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_74240d23f61a3a444db5f02f55d7077fc13d5b6b31ff3b578a2bca956c6836ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74240d23f61a3a444db5f02f55d7077fc13d5b6b31ff3b578a2bca956c6836ea->enter($__internal_74240d23f61a3a444db5f02f55d7077fc13d5b6b31ff3b578a2bca956c6836ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_55c66c72e1b4797599cf767c347e0a811d625319ac35d290b40249c4fcf8f448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55c66c72e1b4797599cf767c347e0a811d625319ac35d290b40249c4fcf8f448->enter($__internal_55c66c72e1b4797599cf767c347e0a811d625319ac35d290b40249c4fcf8f448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Error ";
        
        $__internal_55c66c72e1b4797599cf767c347e0a811d625319ac35d290b40249c4fcf8f448->leave($__internal_55c66c72e1b4797599cf767c347e0a811d625319ac35d290b40249c4fcf8f448_prof);

        
        $__internal_74240d23f61a3a444db5f02f55d7077fc13d5b6b31ff3b578a2bca956c6836ea->leave($__internal_74240d23f61a3a444db5f02f55d7077fc13d5b6b31ff3b578a2bca956c6836ea_prof);

    }

    // line 3
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_696888e3628d61b24139dc3188611c1cfa235f5715a3dee6dc7705ac984e0480 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_696888e3628d61b24139dc3188611c1cfa235f5715a3dee6dc7705ac984e0480->enter($__internal_696888e3628d61b24139dc3188611c1cfa235f5715a3dee6dc7705ac984e0480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        $__internal_7f225b053ac8825dd1f67ab217ba91a1f879ee0db175423ed820f5a3c7cb0801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f225b053ac8825dd1f67ab217ba91a1f879ee0db175423ed820f5a3c7cb0801->enter($__internal_7f225b053ac8825dd1f67ab217ba91a1f879ee0db175423ed820f5a3c7cb0801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " ";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        
        $__internal_7f225b053ac8825dd1f67ab217ba91a1f879ee0db175423ed820f5a3c7cb0801->leave($__internal_7f225b053ac8825dd1f67ab217ba91a1f879ee0db175423ed820f5a3c7cb0801_prof);

        
        $__internal_696888e3628d61b24139dc3188611c1cfa235f5715a3dee6dc7705ac984e0480->leave($__internal_696888e3628d61b24139dc3188611c1cfa235f5715a3dee6dc7705ac984e0480_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_e01b0255ebf79b4e5bcf2d9af02aa07a8d87ed20426f949035afd37822b596e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e01b0255ebf79b4e5bcf2d9af02aa07a8d87ed20426f949035afd37822b596e1->enter($__internal_e01b0255ebf79b4e5bcf2d9af02aa07a8d87ed20426f949035afd37822b596e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_f6030f92754b9a6bf47064b52d316814e24326ce30c9e511bdb2b59ebd6f0a15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6030f92754b9a6bf47064b52d316814e24326ce30c9e511bdb2b59ebd6f0a15->enter($__internal_f6030f92754b9a6bf47064b52d316814e24326ce30c9e511bdb2b59ebd6f0a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_f6030f92754b9a6bf47064b52d316814e24326ce30c9e511bdb2b59ebd6f0a15->leave($__internal_f6030f92754b9a6bf47064b52d316814e24326ce30c9e511bdb2b59ebd6f0a15_prof);

        
        $__internal_e01b0255ebf79b4e5bcf2d9af02aa07a8d87ed20426f949035afd37822b596e1->leave($__internal_e01b0255ebf79b4e5bcf2d9af02aa07a8d87ed20426f949035afd37822b596e1_prof);

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

<?php

/* SonataAdminBundle:Pager:base_results.html.twig */
class __TwigTemplate_ef400e55c115e41c1b2fea652da629db9721bb53fa268d055ee93d1f600ed5c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'num_pages' => array($this, 'block_num_pages'),
            'num_results' => array($this, 'block_num_results'),
            'max_per_page' => array($this, 'block_max_per_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_241829ba92be374ff96e6600b3a37435da28fdf940e59323d6d2384803274814 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_241829ba92be374ff96e6600b3a37435da28fdf940e59323d6d2384803274814->enter($__internal_241829ba92be374ff96e6600b3a37435da28fdf940e59323d6d2384803274814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        $__internal_c0eb72856e27039324a63b1bcd87c570f7732e610c8977404b775c1ef4ce45e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0eb72856e27039324a63b1bcd87c570f7732e610c8977404b775c1ef4ce45e4->enter($__internal_c0eb72856e27039324a63b1bcd87c570f7732e610c8977404b775c1ef4ce45e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('num_pages', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('num_results', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('max_per_page', $context, $blocks);
        
        $__internal_241829ba92be374ff96e6600b3a37435da28fdf940e59323d6d2384803274814->leave($__internal_241829ba92be374ff96e6600b3a37435da28fdf940e59323d6d2384803274814_prof);

        
        $__internal_c0eb72856e27039324a63b1bcd87c570f7732e610c8977404b775c1ef4ce45e4->leave($__internal_c0eb72856e27039324a63b1bcd87c570f7732e610c8977404b775c1ef4ce45e4_prof);

    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_081e3cbe6bcc6b50a119f8a8835d20f1fa0779faf479ef1ba8b4f5d271157e07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_081e3cbe6bcc6b50a119f8a8835d20f1fa0779faf479ef1ba8b4f5d271157e07->enter($__internal_081e3cbe6bcc6b50a119f8a8835d20f1fa0779faf479ef1ba8b4f5d271157e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        $__internal_8e7a98fe3f98d2658168c8b1bd35f6343368d671dfb8135f3e3076411077b975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e7a98fe3f98d2658168c8b1bd35f6343368d671dfb8135f3e3076411077b975->enter($__internal_8e7a98fe3f98d2658168c8b1bd35f6343368d671dfb8135f3e3076411077b975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
        
        $__internal_8e7a98fe3f98d2658168c8b1bd35f6343368d671dfb8135f3e3076411077b975->leave($__internal_8e7a98fe3f98d2658168c8b1bd35f6343368d671dfb8135f3e3076411077b975_prof);

        
        $__internal_081e3cbe6bcc6b50a119f8a8835d20f1fa0779faf479ef1ba8b4f5d271157e07->leave($__internal_081e3cbe6bcc6b50a119f8a8835d20f1fa0779faf479ef1ba8b4f5d271157e07_prof);

    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_f7951e6a84a92b75c41af09aca8bb1beed95e093676b540381b9889405df98fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7951e6a84a92b75c41af09aca8bb1beed95e093676b540381b9889405df98fb->enter($__internal_f7951e6a84a92b75c41af09aca8bb1beed95e093676b540381b9889405df98fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        $__internal_4fb2afa50545a5af46a72c34bc9b3df12b3d8201b9beed1ba3b609b5fdb8f03c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fb2afa50545a5af46a72c34bc9b3df12b3d8201b9beed1ba3b609b5fdb8f03c->enter($__internal_4fb2afa50545a5af46a72c34bc9b3df12b3d8201b9beed1ba3b609b5fdb8f03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 18
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_4fb2afa50545a5af46a72c34bc9b3df12b3d8201b9beed1ba3b609b5fdb8f03c->leave($__internal_4fb2afa50545a5af46a72c34bc9b3df12b3d8201b9beed1ba3b609b5fdb8f03c_prof);

        
        $__internal_f7951e6a84a92b75c41af09aca8bb1beed95e093676b540381b9889405df98fb->leave($__internal_f7951e6a84a92b75c41af09aca8bb1beed95e093676b540381b9889405df98fb_prof);

    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        $__internal_75f290558767e0042089e334b91d415c3c54ae578d21f010dc377d0c8420c615 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75f290558767e0042089e334b91d415c3c54ae578d21f010dc377d0c8420c615->enter($__internal_75f290558767e0042089e334b91d415c3c54ae578d21f010dc377d0c8420c615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        $__internal_c230eb605bd85f458d3fae221f0455c13bf793e89200be5d4cc94dbbf1f8a688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c230eb605bd85f458d3fae221f0455c13bf793e89200be5d4cc94dbbf1f8a688->enter($__internal_c230eb605bd85f458d3fae221f0455c13bf793e89200be5d4cc94dbbf1f8a688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        // line 23
        echo "    <label class=\"control-label\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_per_page", array(), "SonataAdminBundle");
        echo "</label>
    <select class=\"per-page small form-control\" id=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\" style=\"width: auto\">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getperpageoptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 26
            echo "            <option ";
            if (($context["per_page"] == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "maxperpage", array()))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filter" => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), array("_page" => 1, "_per_page" => $context["per_page"])))), "method"), "html", null, true);
            echo "\">";
            // line 27
            echo twig_escape_filter($this->env, $context["per_page"], "html", null, true);
            // line 28
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </select>
";
        
        $__internal_c230eb605bd85f458d3fae221f0455c13bf793e89200be5d4cc94dbbf1f8a688->leave($__internal_c230eb605bd85f458d3fae221f0455c13bf793e89200be5d4cc94dbbf1f8a688_prof);

        
        $__internal_75f290558767e0042089e334b91d415c3c54ae578d21f010dc377d0c8420c615->leave($__internal_75f290558767e0042089e334b91d415c3c54ae578d21f010dc377d0c8420c615_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  140 => 30,  133 => 28,  131 => 27,  123 => 26,  119 => 25,  115 => 24,  108 => 23,  99 => 22,  88 => 19,  85 => 18,  76 => 17,  60 => 13,  51 => 12,  41 => 22,  38 => 21,  36 => 17,  33 => 16,  31 => 12,  28 => 11,);
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

{% block num_pages %}
    {{ admin.datagrid.pager.page }} / {{ admin.datagrid.pager.lastpage }}
    &nbsp;-&nbsp;
{% endblock %}

{% block num_results %}
    {% transchoice admin.datagrid.pager.nbresults with {'%count%': admin.datagrid.pager.nbresults} from 'SonataAdminBundle' %}list_results_count{% endtranschoice %}
    &nbsp;-&nbsp;
{% endblock %}

{% block max_per_page %}
    <label class=\"control-label\" for=\"{{ admin.uniqid }}_per_page\">{% trans from 'SonataAdminBundle' %}label_per_page{% endtrans %}</label>
    <select class=\"per-page small form-control\" id=\"{{ admin.uniqid }}_per_page\" style=\"width: auto\">
        {% for per_page in admin.getperpageoptions %}
            <option {% if per_page == admin.datagrid.pager.maxperpage %}selected=\"selected\"{% endif %} value=\"{{ admin.generateUrl('list', {'filter': admin.datagrid.values|merge({'_page': 1, '_per_page': per_page})}) }}\">
                {{- per_page -}}
            </option>
        {% endfor %}
    </select>
{% endblock %}
", "SonataAdminBundle:Pager:base_results.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/Pager/base_results.html.twig");
    }
}

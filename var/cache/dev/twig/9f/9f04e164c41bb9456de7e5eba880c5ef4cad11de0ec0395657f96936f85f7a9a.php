<?php

/* SonataAdminBundle:Pager:base_results.html.twig */
class __TwigTemplate_a707aa570142156bdbc172562ca7578e7031d000fce5f2b817b2dc5f5bbd30ec extends Twig_Template
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
        $__internal_bba48674760b774e59a3b90bb66c31be74d3f29101043c14fc1a10c86169bd02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bba48674760b774e59a3b90bb66c31be74d3f29101043c14fc1a10c86169bd02->enter($__internal_bba48674760b774e59a3b90bb66c31be74d3f29101043c14fc1a10c86169bd02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        $__internal_4bd4fd38772eb623927f00dd9f16e48b21b5da83ec0f3c5f76074e2b43a03876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bd4fd38772eb623927f00dd9f16e48b21b5da83ec0f3c5f76074e2b43a03876->enter($__internal_4bd4fd38772eb623927f00dd9f16e48b21b5da83ec0f3c5f76074e2b43a03876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

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
        
        $__internal_bba48674760b774e59a3b90bb66c31be74d3f29101043c14fc1a10c86169bd02->leave($__internal_bba48674760b774e59a3b90bb66c31be74d3f29101043c14fc1a10c86169bd02_prof);

        
        $__internal_4bd4fd38772eb623927f00dd9f16e48b21b5da83ec0f3c5f76074e2b43a03876->leave($__internal_4bd4fd38772eb623927f00dd9f16e48b21b5da83ec0f3c5f76074e2b43a03876_prof);

    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_942b399fc0b8c32f5dbd5300c87818e2a0118b7af06bafc51fc7af636ab4608f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_942b399fc0b8c32f5dbd5300c87818e2a0118b7af06bafc51fc7af636ab4608f->enter($__internal_942b399fc0b8c32f5dbd5300c87818e2a0118b7af06bafc51fc7af636ab4608f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        $__internal_8691492ccd7469e1fc2cb3fa111e0c4e65ff35c7e2009c39b93be752d1e92a34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8691492ccd7469e1fc2cb3fa111e0c4e65ff35c7e2009c39b93be752d1e92a34->enter($__internal_8691492ccd7469e1fc2cb3fa111e0c4e65ff35c7e2009c39b93be752d1e92a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
        
        $__internal_8691492ccd7469e1fc2cb3fa111e0c4e65ff35c7e2009c39b93be752d1e92a34->leave($__internal_8691492ccd7469e1fc2cb3fa111e0c4e65ff35c7e2009c39b93be752d1e92a34_prof);

        
        $__internal_942b399fc0b8c32f5dbd5300c87818e2a0118b7af06bafc51fc7af636ab4608f->leave($__internal_942b399fc0b8c32f5dbd5300c87818e2a0118b7af06bafc51fc7af636ab4608f_prof);

    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_0633cc8217d9c5e47266a668a44d56c3fb26a6354bb9bba77b20b93e28c30e65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0633cc8217d9c5e47266a668a44d56c3fb26a6354bb9bba77b20b93e28c30e65->enter($__internal_0633cc8217d9c5e47266a668a44d56c3fb26a6354bb9bba77b20b93e28c30e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        $__internal_726437cdc1d69ed3b63c5cfe69e11f6b89f4fb61726adba8da30a42ff73d9c3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_726437cdc1d69ed3b63c5cfe69e11f6b89f4fb61726adba8da30a42ff73d9c3f->enter($__internal_726437cdc1d69ed3b63c5cfe69e11f6b89f4fb61726adba8da30a42ff73d9c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 18
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_726437cdc1d69ed3b63c5cfe69e11f6b89f4fb61726adba8da30a42ff73d9c3f->leave($__internal_726437cdc1d69ed3b63c5cfe69e11f6b89f4fb61726adba8da30a42ff73d9c3f_prof);

        
        $__internal_0633cc8217d9c5e47266a668a44d56c3fb26a6354bb9bba77b20b93e28c30e65->leave($__internal_0633cc8217d9c5e47266a668a44d56c3fb26a6354bb9bba77b20b93e28c30e65_prof);

    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        $__internal_9e48c732a2b4202df205f4a9a7977788eb4e7b22a75a4d5a861625a9bc1c4a4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e48c732a2b4202df205f4a9a7977788eb4e7b22a75a4d5a861625a9bc1c4a4b->enter($__internal_9e48c732a2b4202df205f4a9a7977788eb4e7b22a75a4d5a861625a9bc1c4a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        $__internal_5643874d8308d428010b5885a5fa8edb0f41eb088cb344c1dc0073053e2be65d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5643874d8308d428010b5885a5fa8edb0f41eb088cb344c1dc0073053e2be65d->enter($__internal_5643874d8308d428010b5885a5fa8edb0f41eb088cb344c1dc0073053e2be65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        // line 23
        echo "    <label class=\"control-label\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_per_page", array(), "SonataAdminBundle");
        echo "</label>
    <select class=\"per-page small form-control\" id=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\" style=\"width: auto\">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getperpageoptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 26
            echo "            <option ";
            if (($context["per_page"] == $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "maxperpage", array()))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filter" => twig_array_merge($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "values", array()), array("_page" => 1, "_per_page" => $context["per_page"])))), "method"), "html", null, true);
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
        
        $__internal_5643874d8308d428010b5885a5fa8edb0f41eb088cb344c1dc0073053e2be65d->leave($__internal_5643874d8308d428010b5885a5fa8edb0f41eb088cb344c1dc0073053e2be65d_prof);

        
        $__internal_9e48c732a2b4202df205f4a9a7977788eb4e7b22a75a4d5a861625a9bc1c4a4b->leave($__internal_9e48c732a2b4202df205f4a9a7977788eb4e7b22a75a4d5a861625a9bc1c4a4b_prof);

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
", "SonataAdminBundle:Pager:base_results.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/Pager/base_results.html.twig");
    }
}

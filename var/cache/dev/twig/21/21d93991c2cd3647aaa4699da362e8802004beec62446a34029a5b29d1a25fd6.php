<?php

/* @SonataAdmin/CRUD/base_list_flat_inner_row.html.twig */
class __TwigTemplate_de780a43dd051469841b888bf1f8d8f65b6ca7976687a0283f396223fdb69b4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'row' => array($this, 'block_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a01bf6c376c3021a3b0c2514af349ee2e2bd49b1a915adbbe0c97c6b1ac25da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a01bf6c376c3021a3b0c2514af349ee2e2bd49b1a915adbbe0c97c6b1ac25da->enter($__internal_3a01bf6c376c3021a3b0c2514af349ee2e2bd49b1a915adbbe0c97c6b1ac25da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_list_flat_inner_row.html.twig"));

        $__internal_c0c04b5f1b6402015818107c52dcf1ddae2ecccb653a2f13ae30c63433221908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0c04b5f1b6402015818107c52dcf1ddae2ecccb653a2f13ae30c63433221908->enter($__internal_c0c04b5f1b6402015818107c52dcf1ddae2ecccb653a2f13ae30c63433221908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_list_flat_inner_row.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "list", array()), "has", array(0 => "batch"), "method") &&  !$this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
            // line 13
            echo "    <td class=\"sonata-ba-list-field sonata-ba-list-field-batch\">
        ";
            // line 14
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderListElement($this->env, ($context["object"] ?? $this->getContext($context, "object")), $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "list", array()), "batch", array(), "array"));
            echo "
    </td>
";
        }
        // line 17
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-inline-fields\" colspan=\"";
        // line 18
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "list", array()), "elements", array())) - ($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "list", array()), "has", array(0 => "_action"), "method") + $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "list", array()), "has", array(0 => "batch"), "method"))), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
    ";
        // line 19
        $this->displayBlock('row', $context, $blocks);
        // line 20
        echo "</td>

";
        // line 22
        if (($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "list", array()), "has", array(0 => "_action"), "method") &&  !$this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
            // line 23
            echo "    <td class=\"sonata-ba-list-field sonata-ba-list-field-_action\" objectId=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        ";
            // line 24
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderListElement($this->env, ($context["object"] ?? $this->getContext($context, "object")), $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "list", array()), "_action", array(), "array"));
            echo "
    </td>
";
        }
        
        $__internal_3a01bf6c376c3021a3b0c2514af349ee2e2bd49b1a915adbbe0c97c6b1ac25da->leave($__internal_3a01bf6c376c3021a3b0c2514af349ee2e2bd49b1a915adbbe0c97c6b1ac25da_prof);

        
        $__internal_c0c04b5f1b6402015818107c52dcf1ddae2ecccb653a2f13ae30c63433221908->leave($__internal_c0c04b5f1b6402015818107c52dcf1ddae2ecccb653a2f13ae30c63433221908_prof);

    }

    // line 19
    public function block_row($context, array $blocks = array())
    {
        $__internal_685eadaa6edc5a7533820714f7c97dd228ef8ff5ed81af890639c7a2acf6da2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_685eadaa6edc5a7533820714f7c97dd228ef8ff5ed81af890639c7a2acf6da2b->enter($__internal_685eadaa6edc5a7533820714f7c97dd228ef8ff5ed81af890639c7a2acf6da2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "row"));

        $__internal_11259586da5b7b18faed628c90b060bd04f51f1f37f621f6f6cd230a06508b08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11259586da5b7b18faed628c90b060bd04f51f1f37f621f6f6cd230a06508b08->enter($__internal_11259586da5b7b18faed628c90b060bd04f51f1f37f621f6f6cd230a06508b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "row"));

        
        $__internal_11259586da5b7b18faed628c90b060bd04f51f1f37f621f6f6cd230a06508b08->leave($__internal_11259586da5b7b18faed628c90b060bd04f51f1f37f621f6f6cd230a06508b08_prof);

        
        $__internal_685eadaa6edc5a7533820714f7c97dd228ef8ff5ed81af890639c7a2acf6da2b->leave($__internal_685eadaa6edc5a7533820714f7c97dd228ef8ff5ed81af890639c7a2acf6da2b_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_list_flat_inner_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 19,  62 => 24,  57 => 23,  55 => 22,  51 => 20,  49 => 19,  43 => 18,  40 => 17,  34 => 14,  31 => 13,  29 => 12,  26 => 11,);
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

{% if admin.list.has('batch') and not app.request.isXmlHttpRequest %}
    <td class=\"sonata-ba-list-field sonata-ba-list-field-batch\">
        {{ object|render_list_element(admin.list['batch']) }}
    </td>
{% endif %}

<td class=\"sonata-ba-list-field sonata-ba-list-field-inline-fields\" colspan=\"{{ admin.list.elements|length - (admin.list.has('_action') + admin.list.has('batch')) }}\" objectId=\"{{ admin.id(object) }}\">
    {% block row %}{% endblock %}
</td>

{% if admin.list.has('_action') and not app.request.isXmlHttpRequest %}
    <td class=\"sonata-ba-list-field sonata-ba-list-field-_action\" objectId=\"{{ admin.id(object) }}\">
        {{ object|render_list_element(admin.list['_action']) }}
    </td>
{% endif %}
", "@SonataAdmin/CRUD/base_list_flat_inner_row.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_list_flat_inner_row.html.twig");
    }
}

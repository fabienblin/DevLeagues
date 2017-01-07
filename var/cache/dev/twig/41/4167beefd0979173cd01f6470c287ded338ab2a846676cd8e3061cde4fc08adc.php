<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_7c3c2c13c1d7e5a07144691cebf765725a9061e56c3363093be0363aabf4a1e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e563126abe49d57754431d4eebda7807702ac8bf5e82d59115de55f5b7065d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e563126abe49d57754431d4eebda7807702ac8bf5e82d59115de55f5b7065d0->enter($__internal_5e563126abe49d57754431d4eebda7807702ac8bf5e82d59115de55f5b7065d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_e9051b23d8d70d8ff602c04fa1fab22101bd266a415b1185fc05cd747eb3e85f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9051b23d8d70d8ff602c04fa1fab22101bd266a415b1185fc05cd747eb3e85f->enter($__internal_e9051b23d8d70d8ff602c04fa1fab22101bd266a415b1185fc05cd747eb3e85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5e563126abe49d57754431d4eebda7807702ac8bf5e82d59115de55f5b7065d0->leave($__internal_5e563126abe49d57754431d4eebda7807702ac8bf5e82d59115de55f5b7065d0_prof);

        
        $__internal_e9051b23d8d70d8ff602c04fa1fab22101bd266a415b1185fc05cd747eb3e85f->leave($__internal_e9051b23d8d70d8ff602c04fa1fab22101bd266a415b1185fc05cd747eb3e85f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}

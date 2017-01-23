<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_22f048d11a186b95c2809c135a16711faee8a36d39889cff97d5e05113ed8aad extends Twig_Template
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
        $__internal_0b0b1466876778f6501a49e19af5569813ca26b30e47a9a849c45827005321f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b0b1466876778f6501a49e19af5569813ca26b30e47a9a849c45827005321f1->enter($__internal_0b0b1466876778f6501a49e19af5569813ca26b30e47a9a849c45827005321f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_71e38a6a977991a60ba2d2fef610bfdd7eac114f6a2074b463e7c400801a4135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71e38a6a977991a60ba2d2fef610bfdd7eac114f6a2074b463e7c400801a4135->enter($__internal_71e38a6a977991a60ba2d2fef610bfdd7eac114f6a2074b463e7c400801a4135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0b0b1466876778f6501a49e19af5569813ca26b30e47a9a849c45827005321f1->leave($__internal_0b0b1466876778f6501a49e19af5569813ca26b30e47a9a849c45827005321f1_prof);

        
        $__internal_71e38a6a977991a60ba2d2fef610bfdd7eac114f6a2074b463e7c400801a4135->leave($__internal_71e38a6a977991a60ba2d2fef610bfdd7eac114f6a2074b463e7c400801a4135_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}

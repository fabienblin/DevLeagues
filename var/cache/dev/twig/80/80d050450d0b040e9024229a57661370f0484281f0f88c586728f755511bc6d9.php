<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_a3d522873c7664ad5fc945dad82314467e1db0b2bf3997bb157909714f4c1dad extends Twig_Template
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
        $__internal_e67ca5d98b7f194c84e1f1dce7f26fdb7eb261545ea2bdd9c6951d47933cd2b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e67ca5d98b7f194c84e1f1dce7f26fdb7eb261545ea2bdd9c6951d47933cd2b9->enter($__internal_e67ca5d98b7f194c84e1f1dce7f26fdb7eb261545ea2bdd9c6951d47933cd2b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_7ed506356184c0a82aab405344da022a864be3536b18941c3026aaaf07db694f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ed506356184c0a82aab405344da022a864be3536b18941c3026aaaf07db694f->enter($__internal_7ed506356184c0a82aab405344da022a864be3536b18941c3026aaaf07db694f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_e67ca5d98b7f194c84e1f1dce7f26fdb7eb261545ea2bdd9c6951d47933cd2b9->leave($__internal_e67ca5d98b7f194c84e1f1dce7f26fdb7eb261545ea2bdd9c6951d47933cd2b9_prof);

        
        $__internal_7ed506356184c0a82aab405344da022a864be3536b18941c3026aaaf07db694f->leave($__internal_7ed506356184c0a82aab405344da022a864be3536b18941c3026aaaf07db694f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}

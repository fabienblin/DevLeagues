<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_d1724713654b3218729cb75ce28c5bb4929bd3f3a5ee486da02d5d02f736e445 extends Twig_Template
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
        $__internal_0386d26ba0ea5a7b7aedb81da40702cd1c68349a0f4e5ffb904b7792b309c400 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0386d26ba0ea5a7b7aedb81da40702cd1c68349a0f4e5ffb904b7792b309c400->enter($__internal_0386d26ba0ea5a7b7aedb81da40702cd1c68349a0f4e5ffb904b7792b309c400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_eef3b54e67ddac3ef38e18dfe201e966fc8c116146c3d5501f9aadade79dc2c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eef3b54e67ddac3ef38e18dfe201e966fc8c116146c3d5501f9aadade79dc2c3->enter($__internal_eef3b54e67ddac3ef38e18dfe201e966fc8c116146c3d5501f9aadade79dc2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_0386d26ba0ea5a7b7aedb81da40702cd1c68349a0f4e5ffb904b7792b309c400->leave($__internal_0386d26ba0ea5a7b7aedb81da40702cd1c68349a0f4e5ffb904b7792b309c400_prof);

        
        $__internal_eef3b54e67ddac3ef38e18dfe201e966fc8c116146c3d5501f9aadade79dc2c3->leave($__internal_eef3b54e67ddac3ef38e18dfe201e966fc8c116146c3d5501f9aadade79dc2c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
